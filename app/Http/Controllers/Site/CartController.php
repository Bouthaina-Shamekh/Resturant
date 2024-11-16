<?php

namespace App\Http\Controllers\Site;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\Repositories\Cart\CartModelRepository;
use App\Repositoris\Cart\CartRepository;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CartRepository $cart)
    {
        // $repository = App::make('cart');
        // $item = $repository->get();
        // $item = $cart->get();
        return view('site.index',[
            'cart' =>  $cart
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request ,CartRepository $cart)
    {
        $request->validate([
            'product_id' => 'required|int',
            'quantity' => 'nullable|int|min:1',

        ]);

        $product = Product::findOrFail($request->post('product_id'));
        // $repository = new CartModelRepository();
        $cart->add($product ,$request->post('quantity'));

    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CartRepository $cart)
    {
        $request->validate([
            'product_id' => 'required|int',
            'quantity' => 'nullable|int|min:1',

        ]);

        $product = Product::findOrFail($request->post('product_id'));
        // $repository = new CartModelRepository();
        $cart->update($product ,$request->post('quantity'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CartRepository $cart, $id)
    {
        $cart->delete($id);
    }
}
