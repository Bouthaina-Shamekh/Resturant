<?php

namespace App\Http\Controllers\Site;

use App\Models\User;
use App\Models\Admin;
use App\Models\Offer;
use App\Models\Order;
use App\Models\Review;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Delivery;
use App\Models\Sec_Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Notifications\OrderNotification;
use Carbon\Carbon;
use Illuminate\Support\Facades\Notification;

class MainController extends Controller
{
    public function home()
    {

        $sliders = Slider::all();
        $categories = Category::orderBy('id', 'desc')->get();
        foreach ($categories as $category) {
            $category->products = Product::where('category_id', '=', $category->id)->get();
        }
        $products = Product::orderBy('id', 'desc')->get();

        $meals = Sec_Product::orderBy('id', 'desc')->select('id', 'price')->get();

        $offers = Offer::orderBy('id', 'desc')->get();


        $settings = Setting::whereIn('key', ['facebook', 'snapshat', 'whatsapp', 'titel_en', 'titel_ar', 'logo', 'contact_email', 'about_en', 'about_ar', 'currency', 'policy_ar', 'policy_en'])->pluck('value', 'key');

        $favorites = Review::select('product_id')->distinct()->pluck('product_id')->toArray();

        $productsFavorites = Product::whereIn('id', $favorites)->get();

        if (request()->search) {
            $products = Product::where('name_ar', 'like', '%' . request()->search . '%')->orWhere('name_en', 'like', '%' . request()->search . '%')->get();
        } else {

            $products = Product::all();
        }

        return view('site.index', compact('sliders', 'products', 'meals', 'categories', 'offers', 'settings', 'productsFavorites'));
    }

    public function about()
    {

        $settings = Setting::whereIn('key', ['facebook', 'snapshat', 'whatsapp', 'titel_en', 'titel_ar', 'logo', 'contact_email', 'about_en', 'about_ar', 'currency', 'policy_ar', 'policy_en', 'location', 'website'])->get();
        return view('site.about', compact('settings'));
    }

    public function favorite(Request $request)
    {
        $product_id = $request->product_id;
        $user_id = Auth::user()->id;
        $review = Review::where('product_id', $product_id)->where('user_id', $user_id)->first();


        if ($review) {
            $review->update([
                'favorite' => ($review->favorite == 1 ? 0 : 1),
            ]);
            return response()->json('تم');
        } else {

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

            $times = [];
            foreach ($cart as $item) {
                $product_id = $item['productId'];
                $processing_time = Product::find($product_id)->preparation_time;
                $times[] = $processing_time;
            }
            $carbonTimes = array_map(function($time) {
                return Carbon::parse($time);
            }, $times);
            $maxTime = max($carbonTimes);
            // تحويل الوقت إلى تنسيق HH:mm:ss
            $formattedMaxTime = $maxTime->format('H:i:s');
            $totalMinutes = $maxTime->diffInMinutes(Carbon::parse('00:00:00'));

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
                'processing_time' => $totalMinutes,
            ];

            $order = Order::create($orderData);

            foreach ($cart as $item) {
                $size_id = Sec_Product::where('name_en', $item['size'])->first();
                $size_id = ($size_id) ? $size_id->id : null;
                $order->orderIteams()->create([
                    'product_id' => $item['productId'],
                    'meal_id' => $size_id,
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


            Notification::send($admins, new OrderNotification($notificationData, $order->type == 'internal' ? 'store' : 'orderOutside'));


            foreach ($admins as $admin) {
                // OrderEvent::dispatch($admin->id, $notificationData);
            }


            DB::commit();

            if ($request->type == 'outer') {

                return redirect()->route('site.restaurant_address', ['orderId' => $order->id])->with('success', __('Order added successfully. We will contact you soon.'));
            } else {
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
                        'processing_time' => $order->processing_time
                    ]);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }


    public function restaurant(Request $request)
    {
        $user_id = Auth::user()->id;
        $order = Order::find($request->query('orderId'));
        $status = '';
        if($order->status == 'pending'){
            $status = 'تحت الموافقة';
        }
        if($order->status == 'processing'){
            $status = 'قيد التنفيذ';
        }
        if($order->status == 'delivering'){
            $status = 'في التوصيل';
        }
        if($order->status == 'completed'){
            $status = 'تم الإنتهاء';
        }
        return view('site.restaurant_address',compact('order', 'status'));
    }

    public function bills()
    {

        $user = Auth::guard('web')->user()->id;
        $user = User::with('orders')->findOrFail($user);

        if (!$user) {
            return 'No user logged in';
        }

        $orders = $user->orders()->with('orderIteams')->get();
        return view('site.bills', compact('orders'));
    }


    public function selectDelivery($orderId)
    {
        $order = Order::findOrFail($orderId);
        $deliveries = Delivery::where('status', 1)->get(); // جلب الديلفري المتاحين
        return view('select_delivery', compact('order', 'deliveries'));
    }


    public function assignDelivery(Request $request, $orderId)
    {

        dd($request->all());
        $request->validate([
            'delivery_id' => 'required',
        ]);


        $order = Order::findOrFail($orderId);

        DB::table('delivery_orders')->insert([
            'delivery_id' => $request->delivery_id,
            'order_id' => $order->id,
            'status' => 0,
            'delviry_accept_status' => 0,
            'delivery_fee' => 10.0,
            'delivery_tips' => 0.0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        $order->update([
            'status' => 'processing',
        ]);

        return redirect()->route('site.bills')->with('success', 'تم تعيين الديلفري بنجاح.');
    }

    /**
     * Display the specified resource.
     */
    public function getProduct($id)
    {
        $product = Product::with('meals')->findOrFail($id);
        $product->name = app()->currentLocale() == 'en' ? $product->name_en : $product->name_ar;
        $product->content = app()->currentLocale() == 'en' ? $product->content_en : $product->content_ar;
        $product->image_url = $product->image_url;
        foreach ($product->meals as $meal) {
            $meal->name = app()->currentLocale() == 'en' ? $meal->name_en : $meal->name_ar;
        }
        return $product;
    }
}
