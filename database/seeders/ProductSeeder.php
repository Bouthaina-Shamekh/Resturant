<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name_en' => 'Kpap',
                'name_ar' => 'كباب',
                'image' => null,
                'slug' => 'Kpap',
                'content_en' => 'Very delicious charcoal grilled kebab',
                'content_ar' => 'كباب مشوي على الفحم شهي جدا ',
                'quantity' => 50,
                'status' => 'active',
                'category_id' => 1,
                'created_by' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_en' => 'Vegetable Soap',
                'name_ar' => 'شوربة خضار',
                'image' => null,
                'slug' => 'Vegetable Soap',
                'content_en' => 'Very delicious charcoal grilled Vegetable Soap',
                'content_ar' => 'شوربة خضار مشوي  على الفحم شهي جدا ',
                'quantity' => 10,
                'status' => 'active',
                'category_id' => 2,
                'created_by' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name_en' => 'Beef Bitza',
                'name_ar' => 'بيتزا لحم',
                'image' => null,
                'slug' => 'Beef Bitza',
                'content_en' => 'Very delicious charcoal grilled Vegetable Soap',
                'content_ar' => 'بيتزا لحم  مشوي  على الفحم شهي جدا ',
                'quantity' => 15,
                'status' => 'active',
                'category_id' => 3,
                'created_by' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name_en' => 'Shawerma Sirian',
                'name_ar' => 'شاورما سوري',
                'image' => null,
                'slug' => 'Shawerma Sirian',
                'content_en' => 'Very delicious charcoal grilled Shawerma Sirian',
                'content_ar' => ' شاورما سوري  مشوي  على الفحم شهي جدا ',
                'quantity' => 5,
                'status' => 'active',
                'category_id' => 4,
                'created_by' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name_en' => 'Tea',
                'name_ar' => 'شاي',
                'image' => null,
                'slug' => 'Tea',
                'content_en' => 'Very delicious charcoal grilled Tea',
                'content_ar' => ' شاي اخضر بالنعناع',
                'quantity' => 2,
                'status' => 'active',
                'category_id' => 5,
                'created_by' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name_en' => 'Bashmel',
                'name_ar' => 'باشميل',
                'image' => null,
                'slug' => 'Bashmel',
                'content_en' => 'Very delicious charcoal grilled Bashmel',
                'content_ar' => 'باشميل شهي',
                'quantity' => 70,
                'status' => 'active',
                'category_id' => 6,
                'created_by' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
