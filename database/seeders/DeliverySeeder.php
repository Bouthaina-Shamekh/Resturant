<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('deliveries')->insert([
            'name' => 'Bouthaina Kalloub',
            'email' => 'delivery@delivery.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), // تشفير الباسوورد
            'gender' => 1, // 1 للذكر، 0 للأنثى
            'status' => 0,
            'status_accept_order' => 1,
            'age' => 25,
            'phone' => '0593407702',
            'img' => null, // يمكنك إضافة رابط صورة إذا كنت تريد
            'created_by' => null, // أو يمكنك إضافة ID للمشرف إذا كان موجودًا
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // يمكنك إضافة المزيد من المستخدمين هنا إذا كنت تريد
        DB::table('deliveries')->insert([
            'name' => 'Ayat',
            'email' => 'ayat@delivery.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'gender' => 0,
            'status' => 0,
            'status_accept_order' => 1,
            'age' => 25,
            'phone' => '0987654321',
            'img' => null,
            'created_by' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
    
}
