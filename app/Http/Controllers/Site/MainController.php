<?php

namespace App\Http\Controllers\Site;

use App\Models\Offer;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use App\Models\Sec_Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\Setting;

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
        $offers = Offer::all();
        $settings = Setting::whereIn('key', ['facebook','snapshat','whatsapp','titel_en', 'titel_ar', 'logo', 'contact_email', 'about_en', 'about_ar', 'currency','policy_ar', 'policy_en'])->pluck('value', 'key');

        return view('site.index',compact('sliders','products','meals','categories','offers','settings'));

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

    public function favorite(Request $request){
        $product_id = $request->product_id;
        $user_id = $request->user();
        if($user_id){
            $user_id = $request->user()->id;
        }

        $review = Review::where('product_id', $product_id)->where('user_id', $user_id)->first();


        if($review){
            $review->update([
                'favorite' => ($review->favorite == 1 ? 0 : 1),
            ]);
            return response()->json('تم');
        }else{

            Review::create([
                'product_id' => $product_id,
                'user_id' => $user_id,
                'favorite' => 1
            ]);

        }
    }


}
