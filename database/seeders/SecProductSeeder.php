<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SecProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sec_products')->insert([
            [
                'name_en' =>'Main Meal',
                'name_ar' => 'وجبة رئيسية',
                'price' => 19,
                'compare_price' => 24,
                'num_meal' => 1,
                'product_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name_en' =>'individual Meal',
                'name_ar' => 'وجبة فردية',
                'price' => 20,
                'compare_price' => 30,
                'num_meal' => 2,
                'product_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name_en' =>'family Meal',
                'name_ar' => 'وجبة عائلية',
                'price' => 19,
                'compare_price' => 24,
                'num_meal' => 3,
                'product_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name_en' =>'Main Meal',
                'name_ar' => 'وجبة رئيسية',
                'price' => 19,
                'compare_price' => 24,
                'num_meal' => 1,
                'product_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name_en' =>'individual Meal',
                'name_ar' => 'وجبة فردية',
                'price' => 20,
                'compare_price' => 30,
                'num_meal' => 2,
                'product_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name_en' =>'family Meal',
                'name_ar' => 'وجبة عائلية',
                'price' => 19,
                'compare_price' => 24,
                'num_meal' => 3,
                'product_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name_en' =>'family Meal',
                'name_ar' => 'وجبة عائلية',
                'price' => 19,
                'compare_price' => 24,
                'num_meal' => 3,
                'product_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}