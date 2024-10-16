<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Sec_Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('dashboard.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = new Product();
        $categories = Category::get();
        return view('dashboard.products.create', compact('product', 'categories'));
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
            'content_ar' => 'nullable|string|max:255',
            'content_en' => 'nullable|string|max:255',
            'status' => 'required|in:active,archive',
            'quantity' => 'required|integer|min:0',
            'category_id' => 'required|integer|exists:categories,id',
        ],[
            'name_en.unique' => __('The name has already been taken.'),
            'name_ar.unique' => __('The name has already been taken.'),
        ]);

        DB::beginTransaction();
        try{
            $slug = Str::slug($request->name_en);
            if($request->hasFile('imageFile')){
                $imageFile = $request->file('imageFile');
                $imageName =  "products_" . $slug . '.' . $imageFile->extension();
                $imagePath = $imageFile->storeAs('products',$imageName, 'public');
                $request->merge([
                    'image' => $imagePath,
                ]);
            }

            $request->merge([
                'slug' => $slug,
                'created_by' => auth()->user()->id
            ]);

            $product = Product::create($request->all());
            for($sec_product = 1; $sec_product <= $request->mealCount; $sec_product++){
                Sec_Product::create([
                    'name_ar' => $request['name_ar_'.$sec_product],
                    'name_en' => $request['name_en_'.$sec_product],
                    'description' => $request['description_'.$sec_product],
                    'price' => $request['price_'.$sec_product],
                    'compare_price' => $request['compare_price_'.$sec_product],
                    'num_meal' => $sec_product,
                    'product_id' => $product->id,
                ]);
            }
            DB::commit();

        }catch (\Exception $e){

            DB::rollBack();
            throw $e;
            // return redirect()->route('dashboard.products.index')->with('danger', __('This event failed'));
        }

        return redirect()->route('dashboard.products.index')->with('success', __('Item added successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::get();
        $btn_label = __('Update');
        return view('dashboard.products.edit', compact('product', 'categories', 'btn_label'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name_en' => 'required|string|max:255|unique:products,name_en,'.$product->id.',id',
            'name_ar' => 'required|string|max:255|unique:products,name_ar,'.$product->id.',id',
            'content_ar' => 'nullable|string|max:255',
            'content_en' => 'nullable|string|max:255',
            'status' => 'required|in:active,archive',
            'quantity' => 'required|integer|min:0',
            'category_id' => 'required|integer|exists:categories,id',
        ],[
            'name_en.unique' => __('The name has already been taken.'),
            'name_ar.unique' => __('The name has already been taken.'),
        ]);
        DB::beginTransaction();
        try{
            $slug = Str::slug($request->name_en);
            if($request->hasFile('imageFile')){
                $image_old = $product->image;
                if($image_old != null){
                    Storage::delete('public/'.$image_old);
                }
                $imageFile = $request->file('imageFile');
                $imageName =  "products_" . $slug . '.' . $imageFile->extension();
                $imagePath = $imageFile->storeAs('products',$imageName, 'public');
                $request->merge([
                    'image' => $imagePath,
                ]);
            }

            $request->merge([
                'slug' => $slug,
            ]);

            $product->update($request->all());

            for($sec_product = 1; $sec_product <= $request->mealCount; $sec_product++){
                Sec_Product::updateOrCreate([
                    'product_id' => $product->id,
                    'num_meal' => $sec_product
                ],[
                    'name_ar' => $request['name_ar_'.$sec_product],
                    'name_en' => $request['name_en_'.$sec_product],
                    'description' => $request['description_'.$sec_product],
                    'price' => $request['price_'.$sec_product],
                    'compare_price' => $request['compare_price_'.$sec_product],
                ]);
            }
            DB::commit();

        }catch (\Exception $e){

            DB::rollBack();
            // throw $e;
            return redirect()->route('dashboard.products.index')->with('danger', __('This event failed'));
        }

        return redirect()->route('dashboard.products.index')->with('success', __('Item updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $image_old = $product->image;
        if($image_old != null){
            Storage::delete('public/'.$image_old);
        }
        $product->delete();
        return redirect()->route('dashboard.products.index')->with('success', __('Item deleted successfully.'));
    }
}
