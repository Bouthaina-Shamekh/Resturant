<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('dashboard.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = new User();
        return view('dashboard.users.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
            'gender' => 'required|in:0,1',
            'status' => 'required|in:1,0',
            'imageFile' => 'nullable|image',
        ]);
        if($request->hasFile('imageFile')){
            $imageFile = $request->file('imageFile');
            $imageName =  "users_" . $request->email . '.' . $imageFile->extension();
            $imagePath = $imageFile->storeAs('users',$imageName, 'public');
            $request->merge([
                'image' => $imagePath,
            ]);
        }
        User::create($request->all());
        return redirect()->route('dashboard.users.index')->with('success', __('Item created successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $btn_label = __('Update');
        return view('dashboard.users.edit', compact('user', 'btn_label'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8',
            'gender' => 'required|in:0,1',
            'status' => 'required|in:1,0',
            'imageFile' => 'nullable|image',
        ]);
        if($request->hasFile('imageFile')){
            $user->image ? Storage::delete($user->image) : '';
            $imageFile = $request->file('imageFile');
            $imageName =  "users_" . $request->email . '.' . $imageFile->extension();
            $imagePath = $imageFile->storeAs('users',$imageName, 'public');
            $request->merge([
                'image' => $imagePath,
            ]);
        }
        $user->update($request->all());
        return redirect()->route('dashboard.users.index')->with('success', __('Item updated successfully.'));
    }
    public function updateProfile(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'nullable|string|max:255',
        ]);
        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);


        return redirect()->route('site.index')->with('success', __('Item updated successfully.'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->image ? Storage::delete($user->image) : '';
        $user->delete();
        return redirect()->route('dashboard.users.index')->with('success', __('Item deleted successfully.'));
    }
}
