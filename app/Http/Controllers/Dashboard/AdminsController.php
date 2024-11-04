<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Admin;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Permission;

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
        $roles = Role::pluck('name','name')->all();
        // $roles = Role::pluck('name','name')->all();
        return view('dashboard.admins.create', compact('admin','roles'));
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
        $admin = Admin::create($request->all());

        $admin->assignRole($request->input('roles_name'));


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
        $roles = Role::pluck('name','name')->all();
        return view('dashboard.admins.edit', compact('admin','roles'));
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
        if(!empty($request['password'])){
            $request['password'] = Hash::make($request['password']);
            $admin->update($request->all());
        }else{
            $admin->update($request->except('password'));
        }

        DB::table('model_has_roles')->where('model_id',$admin->id)->delete();

        $admin->assignRole($request->input('roles_name'));

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
