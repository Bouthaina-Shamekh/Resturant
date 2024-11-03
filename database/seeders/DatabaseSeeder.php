<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
use App\Models\User;
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


        $this->call(PermissionTableSeeder::class);

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
    }
}
