<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class MainController extends Controller
{


    public function home(){

        $sliders = Slider::all();
        return view('site.index',compact('sliders'));

    }

    public function about(){

        return view('site.about');

    }


}
