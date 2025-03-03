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

        


$count_all = Order::count();
$count_pending = Order::where('status', 'pending')->count();
$persent_pending = $count_pending / $count_all * 100;

$count_processing = Order::where('status', 'processing')->count();
$persent_processing = $count_processing / $count_all * 100;

$count_delivering = Order::where('status', 'delivering')->count();
$persent_delivering = $count_delivering / $count_all * 100;

$count_completed = Order::where('status', 'completed')->count();
$persent_completed = $count_completed / $count_all * 100;

$chartjs = app()->chartjs
    ->name('barChartTest')
    ->type('bar')
    ->size(['width' => 350, 'height' => 200])
    ->labels(['order pending', 'order processing', 'order delivering', 'order completing'])
    ->datasets([
        [
            "label" => "Order Status",
            'backgroundColor' => ['rgba(236, 78, 186, 0.2)', 'rgba(66, 233, 94, 0.2)', 'rgba(54, 150, 240, 0.3)', 'rgba(247, 171, 84, 0.2)'],
            'data' => [0, 0, 0, 0],  // نضع القيم الابتدائية 0
        ],
    ])
    ->options([
        'responsive' => true,
        'animation' => [
            'duration' => 1500,  // مدة التحريك
            'easing' => 'easeOutBounce', // نوع التحريك
            'onProgress' => 'function(animation) { 
                // تحديث البيانات تدريجياً خلال الحركة
                var chart = animation.chart;
                chart.data.datasets[0].data = [
                    {$persent_pending},
                    {$persent_processing},
                    {$persent_delivering},
                    {$persent_completed}
                ];
                chart.update();
            }',
        ],
        'scales' => [
            'y' => [
                'beginAtZero' => true,
            ]
        ],
    ]);



        return view('dashboard.index', compact('c_count','p_count','a_count','s_count','o_count','d_count','n_count','or_count','daysVisits','days','monthsVisits','months','chartjs','persent_pending','persent_processing','persent_delivering','persent_completed'));
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
