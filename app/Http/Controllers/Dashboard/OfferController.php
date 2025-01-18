<?php

namespace App\Http\Controllers\Dashboard;


use App\Models\Media;
use App\Models\Offer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offers = Offer::orderBy('id', 'desc')->get();
        return view('dashboard.offer.index',compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $offers = Offer::all();
        $images = Media::paginate(100);
        return view('dashboard.Offer.create',compact('offers','images'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'imagePath' => 'required',
            'link' => 'nullable',

        ]);
        // Insert To Database
        Offer::create([
            'link' => $request->link,
            'image' => $request->imagePath,
        ]);

        return redirect()->route('dashboard.offer.index')->with('success', __('Item updated successfully.'));
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
        $offer = Offer::findOrFail($id);
        $images = Media::paginate(100);
        return view('dashboard.offer.edit',compact('offer','images'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'imagePath' => 'required',
            'link' => 'nullable',

        ]);

        $offers = Offer::findOrFail($id);
        $image = $request->imagePath;
        if($image == null){
            $image = $offers->image;
        }

        // Insert To Database
        $offers->update([
            'link' => $request->link,
           'image' => $image,
        ]);

        return redirect()->route('dashboard.offer.index')->with('success', __('Item updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $offers = Offer::findOrFail($id);
        $image_old = $offers->image;
        if($image_old != null){
            Storage::delete('public/'.$image_old);
        }
        $offers->delete();
        return redirect()->route('dashboard.offer.index')->with('success', __('Item deleted successfully.'));
    }
}
