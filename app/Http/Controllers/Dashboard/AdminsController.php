<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::get();
        return view('dashboard.admins.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $admin = new Admin();
        return view('dashboard.admins.create', compact('admin'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins,email',
            'password' => 'required|string|min:8',
            'avatarFile' => 'nullable|image',
        ]);

        if($request->hasFile('avatarFile')){
            $imageFile = $request->file('avatarFile');
            $imageName =  "admins_" . $request->email . '.' . $imageFile->extension();
            $imagePath = $imageFile->storeAs('admins',$imageName, 'public');
            $request->merge([
                'avatar' => $imagePath,
            ]);
        }
        Admin::create($request->all());
        return redirect()->route('dashboard.admins.index')->with('success', __('Item created successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        return view('dashboard.admins.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins,email,'.$admin->id,
            'password' => 'required|string|min:8',
            'avatarFile' => 'nullable|image',
        ]);

        if($request->hasFile('avatarFile')){
            if($admin->avatar != null){
                Storage::delete('public/'.$admin->avatar);
            }
            $imageFile = $request->file('avatarFile');
            $imageName =  "admins_" . $request->email . '.' . $imageFile->extension();
            $imagePath = $imageFile->storeAs('admins',$imageName, 'public');
            $request->merge([
                'avatar' => $imagePath,
            ]);
        }
        $admin->update($request->all());
        return redirect()->route('dashboard.admins.index')->with('success', __('Item updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        if($admin->avatar != null){
            Storage::delete('public/'.$admin->avatar);
        }
        $admin->delete();
        return redirect()->route('dashboard.admins.index')->with('success', __('Item deleted successfully.'));
    }
}
