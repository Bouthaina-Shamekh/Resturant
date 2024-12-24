<?php

namespace App\Repositories\Cart;

use App\Models\Cart;
use App\Models\cart_product;
use App\Models\Product;
use App\Repositories\Cart\CartRepository;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class CartModelRepository implements CartRepository
{

    public function get() : Collection
    {
        return Cart::with('products')->where('cookie_id','=', $this->getCookieId())->get();
    }

    public function add(Product $product , $quantity = 1, $mael_id)
    {

        DB::beginTransaction();
        try{
            $cart = Cart::updateOrCreate([
                'cookie_id' => $this->getCookieId(),
                'user_id' => Auth::id(),
            ]);

            $cart_product = Cart::find($cart->id)->products()->where('product_id', $product->id)->first();

            if ($cart_product) {
                // إذا تم العثور على السجل في الـ pivot table، احذفه
                $cart->products()->detach($product->id);
            }

            $cart_product = cart_product::create([
                'cart_id' => $cart->id,
                'product_id' => $product->id,
                'quantity' => $quantity,
                'mael_id' => $mael_id,
            ]);

            DB::commit();
        }catch(\Exception $e){
            DB::rollBack();
            throw $e;
        }
    }

    public function update(Product $product , $quantity = 1)
    {
        Cart::where('product_id', '=' ,$product->id)
                ->where('cookie_id','=',$this->getCookieId())
                ->update(['quantity' => $quantity,
        ]);
    }

    public function delete($id)
    {
        Cart::where('id', '=' ,$id)
            ->where('cookie_id','=',$this->getCookieId())
            ->delete();
    }

    public function empty()
    {
        Cart::where('cookie_id','=', $this->$this->getCookieId())
        ->destroy();
    }

    public function total() : float
    {
        return(float) Cart::where('cookie_id','=', $this->$this->getCookieId())
        ->join('products', 'products.id', '=', 'carts.product_id')
        ->selectRaw('SUM(products.price * carts.quantity) as total')
        ->value('total');
    }

    public function getCookieId()
    {
        $cookie_id = Cookie::get('cart_id');
        if(!$cookie_id){
            $cookie_id = Str::uuid();
            Cookie::queue('cart_id',$cookie_id, 30 * 24 *60);
        }
        return $cookie_id;
    }
}

