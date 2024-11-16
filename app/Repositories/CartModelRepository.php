<?php

namespace App\Repositories\Cart;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Cart\CartRepository;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cookie;

//use App\Repositoris\Cart\CartModelRepository;


class CartModelRepository implements CartRepository
{

    public function get() : Collection
    {
        return Cart::with('products')
        ->where('cookie_id','=', $this->getCookieId())->get();

    }

    public function add(Product $product , $quantity = 1)
    {
          Cart::create([
           'cookie_id' => $this->getCookieId(),
           'user_id' => Auth::id(),
           'product_id' => $product->id,
           'quantity' => $quantity,
          ]);
    }

   public function update(Product $product , $quantity = 1)
   {
         Cart::where('product_id', '=' ,$product->id)
             ->where('cookie_id','=',$this->getCookieId())
             ->update([
            'quantity' => $quantity,

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

