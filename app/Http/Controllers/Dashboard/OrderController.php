<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Delivery;
use App\Models\Order;
use App\Models\Product;
use App\Models\Sec_Product;
use App\Models\Table;
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

        // $orders = $query->paginate(10);
        $orders = $query->orderBy('id', 'desc')->paginate(10);

        
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
        $order = Order::findOrFail($request->order_id);
        $order->table_number = $request->selected_table;
        $order->store_accept_status = 1;
        $order->status = 'processing';
        $order->save();

        $table = Table::findOrFail($request->selected_table);
        $table->status = 1;
        $table->save();
        return redirect()->route('dashboard.orders.index')->with('success', 'تم اضافة الطلب بنجاح.');
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
        foreach ($order->items as $item) {
            $item->product = Product::find($item->product_id);
            $item->size = Sec_Product::find($item->meal_id);
        }
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
        $order->status = 'processing';
        $order->save();
        return redirect()->route('dashboard.orders.index')->with('success', 'تم تعيين الديلفري بنجاح.');
    }

    public function chooseTable(Request $request)
    {
        $order_id = $request->order_id;
        $table_number = $request->table_number;
        $tables = Table::get();
        return view('dashboard.tables.chooseTable',compact('order_id','table_number','tables'));
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
