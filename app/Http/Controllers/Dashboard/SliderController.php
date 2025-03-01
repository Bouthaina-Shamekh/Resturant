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
        $sliders = Slider::orderBy('id', 'desc')->get();
        return view('dashboard.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $slid = Slider::first();
        $images = Media::paginate(100);
        return view('dashboard.slider.create',compact('slid','images'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'description_en' => 'required',
            'description_ar' => 'required',
            'imagePath' => 'required',

        ]);
        // Insert To Database
        Slider::create([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'description_ar' => $request->description_ar,
            'description_en' => $request->description_en,
            'image' => $request->imagePath,
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
        $slid = Slider::findOrFail($id);
        $images = Media::paginate(100);
        return view('dashboard.slider.edit',compact('slid','images'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'description_en' => 'required',
            'description_ar' => 'required',
            'imagePath' => 'nullable',
        ]);

        $slid = Slider::findOrFail($id);
        $image = $request->imagePath;
        if($image == null){
            $image = $slid->image;
        }

        // Insert To Database
        $slid->update([
           'name_en' => $request->name_en,
           'name_ar' => $request->name_ar,
           'description_ar' => $request->description_ar,
           'description_en' => $request->description_en,
           'image' => $image,
        ]);

        return redirect()->route('dashboard.slider.index')->with('success', __('Item updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $slid = Slider::findOrFail($id);
        $slid->delete();
        return redirect()->route('dashboard.slider.index')->with('success', __('Item deleted successfully.'));
    }
}
