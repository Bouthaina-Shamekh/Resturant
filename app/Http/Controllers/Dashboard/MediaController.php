<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Media;
use App\Models\Product;
use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            return Media::paginate(100);
        }
        $images = Media::paginate(100);

        return view('dashboard.media.index', compact('images'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(is_array($request->hasFile('imageFile'))){
            $request->validate([
                'imageFile' => 'required|array|min:1',
                'imageFile.*' => 'image|mimes:jpeg,png,jpg,gif',
            ],[
                'imageFile.*' => 'يجب تحميل صورة فقط باصدار jpeg,png,jpg,gif',
            ]);
        }else{
            $request->validate([
                'imageFile' => 'image|mimes:jpeg,png,jpg,gif',
            ],[
                'imageFile' => 'يجب تحميل صورة فقط باصدار jpeg,png,jpg,gif',
            ]);
        }
        if($request->hasFile('imageFile')){
            if(is_array($request->hasFile('imageFile'))){
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
            }else{
                $imageFile = $request->file('imageFile');
                $imageName = time() . ' - ' . $imageFile->getClientOriginalName() . '.' . $imageFile->extension();
                $imagePath = $imageFile->storeAs('images', $imageName, 'public');
                $mediaData = [
                    'file_name' => $imageFile->getClientOriginalName(),
                    'size' => $imageFile->getSize(),
                    'path' => $imagePath,
                ];
                Media::create($mediaData);
            }

            if($request->ajax()){
                return response()->json(['path' => $mediaData['path']]);
            }
            // return redirect()->back()->with('success', 'تم رفع الصور بنجاح');
            return redirect()->back()->withInput()->with('success', 'تم رفع الصور بنجاح');
        }else{
            return redirect()->back()->with('error', 'يجب تحميل الصورة');
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
    public function destroy(Request $request, $id)
    {
        $image  = Media::findOrFail($id);

        // الفحص في جدول الأصناف والمنتجات اذا وجدت الصورة
        $categoryImage = Category::where('image', $image->path)->first();
        $productImage = Product::where('image', $image->path)->first();
        $sliderImage = Slider::where('image', $image->path)->first();

        if($categoryImage != null || $productImage != null || $sliderImage != null){
            $confirmation_deletion = $request->confirmation_deletion;
            if($confirmation_deletion == null){
                return response()->json(['error' => 'لا يمكن حذف هذه الصورة بسبب تحميلها لاحدى المنتجات والأصناف', 'confirmation_deletion' => false], 400);
            }
        }
        $image_old = $image->path;
        if($image_old != null){
            Storage::delete('public/'.$image_old);
        }
        if($categoryImage != null){
            $categoryImage->image = null;
            $categoryImage->save();
        }
        if($productImage != null){
            $productImage->image = null;
            $productImage->save();
        }
        $image->delete();
        return response()->json(['success' => 'تم حذف الصورة بنجاح']);
    }
}
