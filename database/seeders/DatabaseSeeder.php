<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
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
        // $admin = Admin::create([
        //     'name' => 'Administrator',
        //     'email' => 'admin@admin.com',
        //     'password' => Hash::make('password'),
        //     'roles_name' => ['owner'],
        //     'status'=> 'online',
        // ]);

        // $role = Role::create(['name' => 'Admin']);
        $role = Role::firstOrCreate(
            ['name' => 'Admin'],
            ['guard_name' => 'admin']
        );

        // $permissions = Permission::pluck('id','id')->all();
        $permissions = Permission::limit(10)->pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $admin->assignRole($role->name);
    }
}
