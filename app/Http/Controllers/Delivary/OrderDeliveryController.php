<?php

namespace App\Http\Controllers\Delivary;

use App\Models\Admin;
use App\Models\Order;
use App\Models\Delivery;
use Illuminate\Http\Request;
use App\Events\OrderDeliveryEvent;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Notification;
use App\Notifications\OrderDeliveryNotification;

class OrderDeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $orders = Order::where('delivery_id', auth()->user()->id)->paginate(10);
        $orders = Order::where('delivery_id', auth()->user()->id)
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('delivery.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        $delivery = $order->delivery()->select([
            'id',
            'order_id',
            DB::raw("ST_Y(current_location) AS lat"),
            DB::raw("ST_X(current_location) AS lng"),
        ])->first();

        return view('delivery.orders.show', [
            'order' => $order,
            'delivery' => $delivery,
        ]);

        // return('hello');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        $order->items = $order->orderIteams;
        $btn_label = '';
        if ($order->status == 'processing') {
            $btn_label = __('Accept');
        }
        if ($order->status == 'delivering') {
            $btn_label = __('Done');
        }

        return view('delivery.orders.edit', compact('order', 'btn_label'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $message = '';
        if ($order->status == 'processing') {
            $order->update([
                'store_accept_status' => 1,
                'status' => 'delivering',
            ]);
            $message = 'تم قبول الطلب بنجاح.';
        }
        if ($order->status == 'delivering') {
            $order->update([
                'store_accept_status' => 1,
                'status' => 'completed',
            ]);
            $message = 'تم وصول الطلب بنجاح.';
        }

        // بيانات الإشعار
        $notificationData = [
            'type' => $order->type,
            'order_id' => $order->id,
            'table_number' => $order->table_number,
            'address_name' => $order->address_name,
            'phone' => $order->phone,
            'total_amount' => $order->total_amount,
            'order_number' => $order->number,
            'message' => $message,
            'items' => $order->items ?? []
        ];

        $admins = Admin::all();
        Notification::send($admins, new OrderDeliveryNotification($notificationData, $order->delivery_id, 'order'));
        foreach ($admins as $admin) {
            OrderDeliveryEvent::dispatch($admin->id, $notificationData, $order->delivery_id);
        }
        return redirect()->back()->with('success', 'تم قبول الطلب بنجاح.');
    }
    public function cancel(Request $request, Order $order)
    {
        $delivery = Delivery::find($order->delivery_id);
        $delivery = $delivery->name;
        $order->update([
            'store_accept_status' => 0,
            'delivery_id' => null,
            'status' => 'cancelled',
        ]);
        // بيانات الإشعار
        $notificationData = [
            'type' => $order->type,
            'order_id' => $order->id,
            'table_number' => $order->table_number,
            'address_name' => $order->address_name,
            'phone' => $order->phone,
            'total_amount' => $order->total_amount,
            'order_number' => $order->number,
            'message' => 'تم رفض الطلب',
        ];

        $admins = Admin::all();
        Notification::send($admins, new OrderDeliveryNotification($notificationData, $delivery, 'delivery'));
        foreach ($admins as $admin) {
            OrderDeliveryEvent::dispatch($admin->id, $notificationData, $order->delivery_id, 'delivery');
        }
        return redirect()->back()->with('success', 'تم قبول الطلب بنجاح.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $orders = Order::findOrFail($id);
        $orders->delete();

        return redirect()->route('delivery.orders.index')->with('success', __('Item deleted successfully.'));
    }
}
