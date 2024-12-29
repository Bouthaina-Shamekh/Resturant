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

// $permissions = [
//     ['name' =>'view products', 'guard_name' => 'admin'],
//     ['name' => 'add product', 'guard_name' => 'admin'],
//     ['name' => 'delete product', 'guard_name' => 'admin'],
//     ['name' => 'edit product ', 'guard_name' => 'admin'],

//     ['name' =>'view categories', 'guard_name' => 'admin'],
//     ['name' => 'add category', 'guard_name' => 'admin'],
//     ['name' => 'delete category', 'guard_name' => 'admin'],
//     ['name' => 'edit category ', 'guard_name' => 'admin'],

// ];

$permissions = [
    ['name' =>'view products', 'guard_name' => 'admin'],
    ['name' => 'add product', 'guard_name' => 'admin'],
    ['name' => 'delete product', 'guard_name' => 'admin'],
    ['name' => 'edit product', 'guard_name' => 'admin'],

    ['name' =>'view categories', 'guard_name' => 'admin'],
    ['name' => 'add category', 'guard_name' => 'admin'],
    ['name' => 'delete category', 'guard_name' => 'admin'],
    ['name' => 'edit category', 'guard_name' => 'admin'],
];


// foreach ($permissions as $permissionName) {
//     Permission::firstOrCreate(
//         ['name' => $permissionName],
//         ['guard_name' => 'admin'] // Ensure the guard name is 'admin'
//     );
// }

foreach ($permissions as $permission) {
    Permission::firstOrCreate(
        ['name' => $permission['name'], 'guard_name' => $permission['guard_name']]
    );
}

}
}
