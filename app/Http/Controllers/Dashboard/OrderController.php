<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Delivery;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        $request = Request();
        $query = Order::query();

        if ($type = $request->query('type')) {
            $query->where('type', '=', $type);
        }

        $orders = $query->paginate(10);
        
        return view('dashboard.orders.index',compact('orders'));
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
        $deliveries = Delivery::get();
        $btn_label = __('Accept');
        return view('dashboard.orders.edit',compact('order','deliveries','btn_label'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $order->delivery_id = $request->delivery_id;
        $order->save();
        return redirect()->route('dashboard.orders.index')->with('success', 'تم تعيين الديلفري بنجاح.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('dashboard.orders.index')->with('success', 'تم حذف الطلب بنجاح.');
    }
}
