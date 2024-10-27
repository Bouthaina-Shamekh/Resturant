<?php
//namespace App\Http\Controllers;
namespace App\Http\Controllers\Dashboard;
use App\Models\Admin;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index(Request $request)
{
$data = Admin::orderBy('id','DESC')->paginate(5);
return view('users.show_users',compact('data'))
->with('i', ($request->input('page', 1) - 1) * 5);
}


/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
$roles = Role::pluck('name','name')->all();

return view('users.Add_user',compact('roles'));

}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$this->validate($request, [
'name' => 'required',
'email' => 'required|email|unique:users,email',
'password' => 'required|same:confirm-password',
'roles_name' => 'required'
]);

$input = $request->all();


$input['password'] = Hash::make($input['password']);

$admin = Admin::create($input);

$admin->assignRole($request->input('roles_name'));
return redirect()->route('dashboard.user.index')
->with('success','تم اضافة المستخدم بنجاح');
}

/**
* Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{
    $admin = Admin::find($id);
return view('users.show',compact('admin'));
}
/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
  $admin = Admin::find($id);
$roles = Role::pluck('name')->all();
$userRole = $admin->roles->pluck('name')->all();
return view('users.edit',compact('admin','roles','userRole'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
$this->validate($request, [
'name' => 'required',
'email' => 'required|email|unique:users,email,'.$id,
'password' => 'same:confirm-password',
// 'roles_name' => 'required'
]);
    $input = $request->all();
    if(!empty($input['password'])){
        $input['password'] = Hash::make($input['password']);
    }else{
        $input = Arr::except($input, ['password']);
    }
    $admin = Admin::findOrFail($id);
    $admin->update($input);
DB::table('model_has_roles')->where('model_id',$id)->delete();
$admin->assignRole($request->input('roles_name'));
return redirect()->route('dashboard.user.index')
->with('success','تم تحديث معلومات المستخدم بنجاح');
}
/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function destroy($id)
{

// Admin::find($request->admin_id)->delete();
Admin::findOrFail($id)->delete();
return redirect()->route('dashboard.user.index')->with('success','تم حذف المستخدم بنجاح');
}
}
