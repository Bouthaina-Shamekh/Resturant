<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Admin;
use App\Models\Offer;
use App\Models\Order;
use App\Models\Visit;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use App\Models\Delivery;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {

        $c_count = Category::count();
        $p_count = Product::count();
        $a_count = Admin::count();
        $s_count = Slider::count();
        $o_count = Offer::count();
        $d_count = Delivery::count();
        $n_count = Notification::count();
        $or_count = Order::count();

        $days = Visit::select('date')->distinct()->pluck('date')->toArray();
        $daysVisits = collect($days)->map(function ($day) {
            return [
                "count" => Visit::where("date", "=", $day)->count(),
                'date' => $day
            ];
        });
        $daysVisits = $daysVisits->pluck('count')->toArray();


        $months = [];
        foreach ($days as $day) {
            $month = Carbon::parse($day)->format('Y-m');
            if (!in_array($month, $months)) {
                $months[] = $month;
            }
        }
        $months = array_values($months);

        $monthsVisitsArray = collect($months)->map(function ($month) {
            return [
                "count" => Visit::whereBetween("date", [$month . '-01', $month . '-31'])->count(),
                'month' => Carbon::parse($month)->format('M')
            ];
        });
        $monthsVisits = $monthsVisitsArray->pluck('count')->toArray();
        $months = $monthsVisitsArray->pluck('month')->toArray();

        return view('dashboard.index', compact('c_count','p_count','a_count','s_count','o_count','d_count','n_count','or_count','daysVisits','days','monthsVisits','months'));
    }


    public function storeVisit(Request $request)
    {
        $visit = Visit::where('session_id', $request->session()->getId());

        if ($visit->exists()) {
            return response()->json(['status' => 'exists']);
        }

        Visit::create([
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
            'url_visited' => $request->input('url_visited'),
            'referrer' => $request->input('referrer'),
            'visit_time' => Carbon::now(),
            'session_id' => $request->session()->getId(),
            'date' => Carbon::now()->format('Y-m-d'),
        ]);

        return response()->json(['status' => 'success']);
    }

}
