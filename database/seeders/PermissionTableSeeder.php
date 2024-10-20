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



        'اضافة منتج',
        'حذف منتج',
        'تغير حالة المنتج',
        'تعديل المنتج',


        'اضافة مستخدم',
        'تعديل مستخدم',
        'حذف مستخدم',
        'عرض مستخدم',
        
        'عرض صلاحية',
        'اضافة صلاحية',
        'تعديل صلاحية',
        'حذف صلاحية',


];



foreach ($permissions as $permission) {

Permission::create(['name' => $permission]);
}


}
}
