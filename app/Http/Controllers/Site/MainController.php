<?php

namespace App\Http\Controllers\Site;

use App\Models\Admin;
use App\Models\Offer;
use App\Models\Order;
use App\Models\Review;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Category;
use App\Events\OrderEvent;
use App\Models\OrderIteam;
use App\Models\Sec_Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Notifications\OrderNotification;
use Illuminate\Support\Facades\Notification;

class MainController extends Controller
{
    public function home(){

        $sliders = Slider::all();
        $categories = Category::get();
        foreach($categories as $category){
            $category->products = Product::where('category_id','=', $category->id)->get();
        }
        $products = Product::all();

        $meals = Sec_Product::select('id','price')->get();

        $offers = Offer::all();

        $settings = Setting::whereIn('key', ['facebook','snapshat','whatsapp','titel_en', 'titel_ar', 'logo', 'contact_email', 'about_en', 'about_ar', 'currency','policy_ar', 'policy_en'])->pluck('value', 'key');

        $favorites = Review::select('product_id')->distinct()->pluck('product_id')->toArray();

        $productsFavorites = Product::whereIn('id', $favorites)->get();

        return view('site.index',compact('sliders','products','meals','categories','offers','settings','productsFavorites'));
    }

    public function about(){

        return view('site.about');

    }

    public function favorite(Request $request){
        $product_id = $request->product_id;
        $user_id = Auth::user()->id;
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

    public function storeOrder(Request $request)
    {

        DB::beginTransaction();
        try {

            $request->validate([
                'type' => 'required|in:internal,outer',
                'table_number' => 'required_if:type,internal|nullable|integer',
                'address_name' => 'required_if:type,outer|string',
                'phone' => 'required_if:type,outer|string',
                'total-price' => 'required|numeric',
                'total-quantity' => 'required|numeric',
            ]);
            $cart = json_decode($request->cart_items, true);

            $orderData = [
                'number' => random_int(1000, 9999),
                'type' => $request->type,
                'table_number' => $request->input('table_number') ?? null,
                'address_name' => $request->input('address_name') ?? '',
                'phone' => $request->input('phone') ?? '',
                'total_amount' => $request->input('total-price'),
                'status' => 'pending',
                'payment_status' => 'pending',
                'pyment_method' => '0',
                'user_id' => Auth::user() ? Auth::user()->id : null,
                'voucher' => $request->voucher ?? 0,
            ];

            $order = Order::create($orderData);

            foreach ($cart as $item) {
                $order->orderIteams()->create([
                    'product_id' => $item['productId'],
                    'quantity' => $item['quantity'],
                    'price' => $item['price'],
                    'user_id' => Auth::user() ? Auth::user()->id : null,
                    'order_id' => $order->id,
                ]);
            }


            $admins = Admin::all();

            // بيانات الإشعار
            $notificationData = [
                'type' => $order->type,
                'items' => $cart,
                'total_amount' => $order->total_amount,
                'table_number' => $order->table_number,
                'address_name' => $order->address_name,
                'phone' => $order->phone,
                'order_id' => $order->id
            ];

            // إرسال الإشعار إلى جميع الإداريين
            Notification::send($admins, new OrderNotification($notificationData));

            // إطلاق الحدث لكل مدير على حدة
            foreach ($admins as $admin) {
                OrderEvent::dispatch($admin->id, $notificationData);
            }
            DB::commit();
            if($request->type == 'outer'){
                return redirect()->route('site.restaurant_address')->with('success', __('Order added successfully. We will contact you soon.'));
            }else{
                $cart = json_encode($cart);
                $total_price = $request->input('total-price');
                $total_quantity = $request->input('total-quantity');
                $number_of_table = $request->input('table_number');
                return redirect()->route('site.index')
                        ->with([
                            'successDoneInsideOrder' => true,
                            'cart' => $cart,
                            'total_price' => $total_price,
                            'total_quantity' => $total_quantity,
                            'number_of_table' => $number_of_table,
                        ]);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
            // return back()->withErrors(['error' => $e->getMessage()]);
        }

    }



    public function restaurant_address(){
        return view('site.restaurant_address');
    }

   public function restaurant() {

     return view('site.restaurant_address');

    }
}
