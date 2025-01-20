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



        // $permissions = Permission::where('guard_name', 'admin')->pluck('id')->all();



        $this->call(PermissionTableSeeder::class);
        $permissions = Permission::where('guard_name', 'admin')->get();
        // dd($permissions);
        $role->syncPermissions($permissions);
        $admin->assignRole($role->name);


        $user = User::create([
            'email' => 'ayat@gmail.com',
            'name' => 'Ayat',
            'password' => Hash::make('user'),
            'status' => '1',
        ]);

       
        $this->call(SliderSeeder::class);
        $this->call(OffersTableSeeder::class);
        $this->call(DeliverySeeder::class);
        Category::factory(10)->create();
        Product::factory(50)->create();
        Sec_Product::factory(100)->create();

    }
}
