<?php

namespace App\Http\Controllers\Delivary;

use App\Events\OrderDeliveryEvent;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Delivery;
use App\Models\Order;
use App\Notifications\OrderDeliveryNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class OrderDeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::where('delivery_id', auth()->user()->id)->paginate(10);
        return view('delivery.orders.index',compact('orders'));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        $order->items = $order->orderIteams;
        $btn_label = __('Accept');
        return view('delivery.orders.edit',compact('order','btn_label'));    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $order->update([
            'store_accept_status' => 1
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
            'message' => 'تم قبول الطلب',
        ];

        $admins = Admin::all();
        Notification::send($admins, new OrderDeliveryNotification($notificationData,$order->delivery_id,'order'));
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
            'delivery_id' => null
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
        Notification::send($admins, new OrderDeliveryNotification($notificationData,$delivery,'delivery'));
        foreach ($admins as $admin) {
            OrderDeliveryEvent::dispatch($admin->id, $notificationData, $order->delivery_id,'delivery');
        }
        return redirect()->back()->with('success', 'تم قبول الطلب بنجاح.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {

    }
}
