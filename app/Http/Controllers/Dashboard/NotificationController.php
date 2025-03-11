<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function notificationsIndex()
    {
        // dd(Auth::guard('admin')->user()->notifications->first());
        return view('dashboard.notifications.index');
    }

    public function show($id)
    {
        $notification = Notification::findOrFail($id);
        $notification->update([
            'read_at' => now(),
        ]);
        $notificationData = json_decode($notification->data);
        if($notificationData->order->type == 'internal'){
            $order_id = $notificationData->order->order_id;
            $table_number = $notificationData->order->table_number;
            return redirect()->route('dashboard.order.chooseTable', ['order_id' => $order_id, 'table_number' => $table_number]);
        }
        return view('dashboard.notifications.show', compact('notification', 'notificationData'));
    }

        // public function clearAllNotifications(Request $request){
        //     Notification::where('notifiable_id', auth()->user()->id)->delete();
        //     return redirect()->back();
        // }

        public function clearAllNotifications(Request $request)
    {

        // Notification::where('notifiable_id', auth()->user()->id)
        //     ->whereNull('deleted_at')
        //     ->update(['deleted_at' => now()]);

        Notification::where('notifiable_id', auth()->user()->id)->delete();
        return redirect()->back();
    }
}
