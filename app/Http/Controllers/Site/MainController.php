<?php

namespace App\Http\Controllers\Site;

use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use App\Models\Sec_Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{


    public function home(){

        $sliders = Slider::all();
        // $products = Product::with('category','review','meals')->all();
        $products = Product::all();
        $meals = Sec_Product::select('id','price')->get();
        return view('site.index',compact('sliders','products','meals'));

    }


    public function category($id)
    {
        $category = Category::with('products')->find($id);
        return view('site.index', compact('category'));
    }

    public function product($id)
    {
        $product = Product::with('reviews', 'category')->all();



        // $related = Product::where('category_id', $product->category_id)->where('id', '!=', $product->id)->get();

        return view('site.index', compact('product'));
    }
    public function about(){

        return view('site.about');

    }


}
