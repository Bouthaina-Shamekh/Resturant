<?php

namespace App\Http\Controllers\Site;


use App\Mail\ContactMail;
use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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


            $data = $request->except('_token');
            Mail::to('contactus@gmail.com')->send(new ContactUsMail($data));





        return redirect()->back()->with('successSend', true);
    }

}
