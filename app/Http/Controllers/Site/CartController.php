<?php

namespace App\Http\Controllers\Site;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\Models\Sec_Product;
use App\Repositories\Cart\CartRepository;

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
            'productId' => 'required|int|exists:products,id',
            'quantity' => 'nullable|int|min:1',
            'size' => 'nullable|string',
        ]);

        $product = Product::findOrFail($request->post('productId'));

        if(app()->currentLocale() == 'en'){
            $meal_id = Sec_Product::where('name_en',$request->post('size'))->first()->id;
        }else{
            $meal_id = Sec_Product::where('name_ar',$request->post('size'))->first()->id;
        }

        $cart->add($product ,$request->post('quantity'), $meal_id);
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
