<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Admin;
use App\Models\Delivery;
use App\Events\MessageEvent;
use Illuminate\Http\Request;
use App\Events\ChatMessageSent;
use Illuminate\Support\Facades\Auth;

class ChatsController extends Controller
{
    public function admin_index(){
        $users = Delivery::all();
        return view('dashboard.chats.index',compact('users'));

    }

    public function delivery_index(){
        $users = Admin::all();
        return view('delivery.chats.index',compact('users'));
    }


    public function saveChat(Request $request){


        try {

            if (Auth::guard('admin')->check()) {
                $senderType ='admin';
                $receiverType ='delivery';
              }elseif(Auth::guard('delivery')->check()){
                $senderType ='delivery';
                $receiverType ='admin';
              }

            $senderId =$request->sender_id;
            $receiverId = $request->receiver_id;
            $message = $request->message;

            // Save the message to the database
            $chat = Chat::create([
                'sender_id' => $senderId,
                'sender_type' => $senderType,
                'receiver_id' => $receiverId,
                'receiver_type' => $receiverType,
                'message' => $message,
            ]);

            // Broadcast the event
            event(new ChatMessageSent($senderId, $senderType, $receiverId, $receiverType, $message));
            return response()->json(['success' => true, 'data' => $chat ]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'msg' => $e->getMessage()]);
        }
       }


    public function loadChat(Request $request){
        try {


            $chats = Chat::where(function($query) use ($request) {
                // Chats where the authenticated user is the sender and the selected user is the receiver
                $query->where('sender_id', $request->sender_id)
                      ->where('sender_type', $request->sender_type)
                      ->where('receiver_id', $request->receiver_id)
                      ->where('receiver_type', $request->receiver_type);
            })
            ->orWhere(function($query) use ($request) {
                // Chats where the selected user is the sender and the authenticated user is the receiver
                $query->where('sender_id', $request->receiver_id)
                      ->where('sender_type', $request->receiver_type)
                      ->where('receiver_id', $request->sender_id)
                      ->where('receiver_type', $request->sender_type);
            })
            ->get();
   
            

            return response()->json(['success' => true, 'data' => $chats ]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'msg' => $e->getMessage()]);
        }

    }
}



