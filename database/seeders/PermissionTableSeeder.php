<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionTableSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{



$permissions = [
    ['name' =>'view products', 'guard_name' => 'admin'],
    ['name' => 'add product', 'guard_name' => 'admin'],
    ['name' => 'delete product', 'guard_name' => 'admin'],
    ['name' => 'edit product', 'guard_name' => 'admin'],

    ['name' =>'view categories', 'guard_name' => 'admin'],
    ['name' => 'add category', 'guard_name' => 'admin'],
    ['name' => 'delete category', 'guard_name' => 'admin'],
    ['name' => 'edit category', 'guard_name' => 'admin'],

    
    ['name' =>'view sliders', 'guard_name' => 'admin'],
    ['name' => 'add slider', 'guard_name' => 'admin'],
    ['name' => 'delete slider', 'guard_name' => 'admin'],
    ['name' => 'edit slider', 'guard_name' => 'admin'],

    
    ['name' =>'view offers', 'guard_name' => 'admin'],
    ['name' => 'add offer', 'guard_name' => 'admin'],
    ['name' => 'delete offer', 'guard_name' => 'admin'],
    ['name' => 'edit offer', 'guard_name' => 'admin'],

    ['name' =>'view admins', 'guard_name' => 'admin'],
    ['name' => 'add admin', 'guard_name' => 'admin'],
    ['name' => 'delete admin', 'guard_name' => 'admin'],
    ['name' => 'edit admin', 'guard_name' => 'admin'],

    ['name' =>'view roles', 'guard_name' => 'admin'],
    ['name' => 'add role', 'guard_name' => 'admin'],
    ['name' => 'delete role', 'guard_name' => 'admin'],
    ['name' => 'edit role', 'guard_name' => 'admin'],

    ['name' =>'view users', 'guard_name' => 'admin'],
    ['name' => 'add user', 'guard_name' => 'admin'],
    ['name' => 'delete user', 'guard_name' => 'admin'],
    ['name' => 'edit user', 'guard_name' => 'admin'],

    
];




foreach ($permissions as $permission) {
    Permission::firstOrCreate(
        ['name' => $permission['name'], 'guard_name' => $permission['guard_name']]
    );
}

}
}
