<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Media;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slid = Slider::with('media')->first();
        return view('dashboard.slider.index',compact('slid'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $slid = Slider::with('media')->first();
        $images = Media::paginate(100);
        return view('dashboard.slider.create',compact('slid','images'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_en' => 'required|string|max:255|unique:products,name_en',
            'name_ar' => 'required|string|max:255|unique:products,name_ar',
            'imageFile' => 'nullable|image',
            'description_en' => 'required',
            'description_ar' => 'required',
        ]);

        // Insert To Database

        Slider::create([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
           'description_en' => $request->description,
           'description_ar' => $request->description,
           'description_en' => $request->description,
        ]);

        return redirect()->route('dashboard.slider.index')->with('success', __('Item updated successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slid)
    {

        $image_old = $slid->image;
        if($image_old != null){
            Storage::delete('public/'.$image_old);
        }
        $slid->delete();
        return redirect()->route('dashboard.products.index')->with('success', __('Item deleted successfully.'));
    }
}
