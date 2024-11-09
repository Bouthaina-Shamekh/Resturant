<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Media;
use App\Models\Product;
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
        $request->validate([
            'imageFile' => 'required|array|min:1',
            'imageFile.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ],[
            'imageFile.*' => 'يجب تحميل صورة فقط باصدار jpeg,png,jpg,gif',
        ]);
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
    public function destroy(Request $request, $id)
    {
        $image  = Media::findOrFail($id);

        // الفحص في جدول الأصناف والمنتجات اذا وجدت الصورة
        $categoryImage = Category::where('image', $image->path)->first();
        $productImage = Product::where('image', $image->path)->first();

        if($categoryImage != null || $productImage != null){
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
        // return back()->with('success', 'تم حذف الصورة بنجاح');
    }
}
