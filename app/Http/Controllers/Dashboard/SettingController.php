<?php
namespace App\Http\Controllers\Dashboard;
use App\Models\Setting;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    public function index(){

        // return "bou";

        $settings = Setting::whereIn('key', ['facebook','snapshat','whatsapp','twitter','instagram','titel_en', 'titel_ar', 'logo', 'contact_email', 'about_en', 'about_ar', 'currency','policy_ar', 'policy_en','location','website'])->pluck('value', 'key');

        return view('setting.index',compact('settings'));
    }



    public function update(Request $request)
{



    $request->validate([
        'facebook' => 'required',
        'snapshat' => 'required',
        'whatsapp' => 'required',
        'twitter' => 'required',
        'instagram' => 'required',
        'titel_ar' => 'required',
        'titel_en' => 'required',
        'logo' => 'nullable|image',
        'contact_email' => 'required',
        'about_ar' => 'required',
        'about_en' => 'required',
        'currency' => 'required',
        'policy_ar' => 'required',
        'policy_en' => 'required',
    ]);


    $data = $request->except(['_token', '_method','logo']);



    try {
        foreach ($data as $key => $value) {
            Setting::updateOrCreate(['key' => $key],
             ['value' => $value]);
        }
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }




        if ($request->logo) {

            $logos = Setting::Where('key','logo')->first();
         if($logos){

            $destination = 'uploads/logos/' . $logos->value;


        if (File::exists($destination)) {

            File::delete($destination);

        }

         }

        $file = $request->file('logo');

        $extention = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extention;
        $file->move(public_path('uploads/logos'), $filename);


        Setting::updateOrCreate(
            ['key' => 'logo'],
            ['value' => $filename]
        );

    }


        return redirect()->back()->with('success', __('Updated successfully'));
}


}
