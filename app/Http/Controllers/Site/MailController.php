<?php

namespace App\Http\Controllers\Site;

use App\Events\ContactEvent;
use App\Mail\ContactMail;
use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ContactNotification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
        Mail::to('bou@gmail.com')->send(new ContactMail());
        // return 'Done';
    }

   public function contact(){
    return view('site.contact');

    }

    public function contact_data(Request $request){

        //  dd($request->all());

        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $data = $request->except('_token');
            // Mail::to('contactus@gmail.com')->send(new ContactUsMail($data));
            $admins = Admin::get();
            Notification::send($admins,new ContactNotification(
                $data,
                'contact'
            ));
            foreach ($admins as $user) {
                ContactEvent::dispatch($user->id,$data);
            }
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }




        return redirect()->back()->with('successSend', true);
    }

}
