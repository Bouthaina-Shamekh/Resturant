<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Media::paginate(100);
        return view('dashboard.media.index', compact('images'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->hasFile('imageFile')){
            foreach ($request->file('imageFile') as $imageFile){
                $imageName = time() . ' - ' . $imageFile->getClientOriginalName() . '.' . $imageFile->extension();
                $imagePath = $imageFile->storeAs('images', $imageName, 'public');
                $mediaData = [
                    'file_name' => $imageFile->getClientOriginalName(),
                    'size' => $imageFile->getSize(),
                    'path' => $imagePath,
                ];
                Media::create($mediaData);
            }
            return back()->with('success', 'تم رفع الصور بنجاح');
        }else{
            return back()->with('error', 'يجب تحميل الصورة');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $image  = Media::findOrFail($id);
        $image_old = $image->path;
        if($image_old != null){
            Storage::delete('public/'.$image_old);
        }
        $image->delete();
        return response()->json(['success' => 'تم حذف الصورة بنجاح']);
        // return back()->with('success', 'تم حذف الصورة بنجاح');
    }
}
