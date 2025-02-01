<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $request = Request();
        $query = Category::query();

        if ($status = $request->query('status')) {
            $query->where('status', '=', $status);
        }
        $categories = $query->get();
        $images = Media::paginate(100);
        return view('dashboard.categories.index', compact('categories', 'images'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_en' => 'required|string|max:255|unique:categories,name_en',
            'name_ar' => 'required|string|max:255|unique:categories,name_ar',
            'imageFile' => 'nullable|image',
            'description_ar' => 'nullable|string|max:255',
            'description_en' => 'nullable|string|max:255',
            'status' => 'required|in:active,archive',
        ], [
            'name_en.unique' => __('The name has already been taken.'),
            'name_ar.unique' => __('The name has already been taken.'),
        ]);

        $slug = Str::slug($request->name_en);

        $request->merge([
            'image' => $request->post('imagePath'),
            'slug' => $slug,
            'created_by' => auth()->user()->id
        ]);

        Category::create($request->all());
        return redirect()->route('dashboard.categories.index')->with('success', __('Item added successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $images = Media::paginate(100);
        return view('dashboard.categories.edit', compact('category', 'images'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name_en' => 'required|string|max:255|unique:categories,name_en,' . $category->id . ',id',
            'name_ar' => 'required|string|max:255|unique:categories,name_ar,' . $category->id . ',id',
            'imageFile' => 'nullable|image',
            'description_ar' => 'nullable|string|max:255',
            'description_en' => 'nullable|string|max:255',
            'status' => 'required|in:active,archive',
        ], [
            'name_en.unique' => __('The name has already been taken.'),
            'name_ar.unique' => __('The name has already been taken.'),
        ]);

        $slug = Str::slug($request->name_en);
        if ($request->post('imagePath') != null) {
            $request->merge([
                'image' => $request->post('imagePath'),
            ]);
        }
        $request->merge([
            'slug' => Str::slug($request->name),
        ]);
        $category->update($request->all());
        return redirect()->route('dashboard.categories.index')->with('success', __('Item updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('dashboard.categories.index')->with('success', __('Item deleted successfully.'));
    }
}
