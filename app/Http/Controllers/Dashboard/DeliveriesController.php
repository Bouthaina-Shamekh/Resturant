<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Delivery;
use Illuminate\Http\Request;

class DeliveriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $deliveries = Delivery::all();
        return view('dashboard.deliveries.index', compact('deliveries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $delivery = new Delivery();
        return view('dashboard.deliveries.create', compact('delivery'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:deliveries',
            'password' => 'required|min:6',
            'gender' => 'required|boolean',
            'status' => 'boolean',
          'status_accept_order' => 'boolean',
           
            'age' => 'required|integer',
            'phone' => 'required',
            'img' => 'nullable|image',
        ]);

        $data = $request->all();
        if ($request->hasFile('img')) {
            $data['img'] = $request->file('img')->store('images', 'public');
        }

        Delivery::create($data);

        return redirect()->route('dashboard.deliveries.index')->with('success', 'Delivery created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Delivery $delivery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $delivery = Delivery::findOrFail($id);

        return view('dashboard.deliveries.edit', compact('delivery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Delivery $delivery)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:deliveries,email,' . $delivery->id,
            'password' => 'nullable|min:6',
            'gender' => 'required|boolean',
            'status' => 'boolean',
            'status_accept_order' => 'boolean',
           
            'phone' => 'required',
            'img' => 'nullable|image',
        ]);

        $data = $request->all();
        if ($request->hasFile('img')) {
            $data['img'] = $request->file('img')->store('images', 'public');
        }

        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->password);
        } else {
            unset($data['password']);
        }

        $delivery->update($data);

        return redirect()->route('dashboard.deliveries.index')->with('success', 'Delivery updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Delivery $delivery)
    {
        $delivery->delete();
        return redirect()->route('dashboard.deliveries.index')->with('success', 'Delivery deleted successfully.');
    }
}
