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
        $categories = Category::get();
        foreach($categories as $category){
            $category->products = Product::where('category_id', $category->id)->get();
        }
        $products = Product::all();
        $meals = Sec_Product::select('id','price')->get();
        return view('site.index',compact('sliders','products','meals','categories'));

    }


    public function category($id)
    {
        $category = Category::all();
        return view('site.parts.category', compact('category'));

    }

    public function product($id)
    {

        $product = Product::with('reviews', 'category')->findOrfail($id);
        return view('site.index', compact('product'));
    }
    public function about(){

        return view('site.about');

    }


}
