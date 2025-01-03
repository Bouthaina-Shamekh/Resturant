<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Product;
use App\Models\Sec_Product;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();




        $admin = Admin::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Administrator',
                'password' => Hash::make('password'),
                'roles_name' => ['owner'],
                'status' => 'online',
            ]
        );

        $role = Role::firstOrCreate(
            ['name' => 'Admin'],
            ['guard_name' => 'admin']
        );



        $permissions = Permission::where('guard_name', 'admin')->pluck('id')->all();





        $role->syncPermissions($permissions);


        $admin->assignRole($role->name);


        $user = User::create([
            'email' => 'ayat@gmail.com',
            'name' => 'Ayat',
            'password' => Hash::make('user'),
            'status' => '1',
        ]);

        $this->call(PermissionTableSeeder::class);
        $this->call(SliderSeeder::class);
        // $this->call(CategorySeeder::class);
        // $this->call(ProductSeeder::class);
        // $this->call(SecProductSeeder::class);
        Category::factory(10)->create();
        Product::factory(50)->create();
        Sec_Product::factory(100)->create();

    }
}
