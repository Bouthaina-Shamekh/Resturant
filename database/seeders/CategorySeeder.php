<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name_en' => 'Mashawi',
                'name_ar' => 'مشاوي',
                'image' => null,
                'slug' => 'Mashawi',
                'description_en' => 'Category for all Mashawi items.',
                'description_ar' => 'فئة لجميع  المشاوي.',
                'status' => 'active',
                'created_by' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_en' => 'Soap',
                'name_ar' => 'الشوربة',
                'image' => null,
                'slug' => 'Soap',
                'description_en' => 'Category for Soap.',
                'description_ar' => 'فئة للشوربات .',
                'status' => 'active',
                'created_by' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_en' => 'Bitza',
                'name_ar' => 'بيتزا',
                'image' => null,
                'slug' => 'books',
                'description_en' => 'Category for all types of bitza.',
                'description_ar' => 'فئة لجميع أنواع البيتزا.',
                'status' => 'archive',
                'created_by' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name_en' => 'Shawerma',
                'name_ar' => 'شاورما',
                'image' => null,
                'slug' => 'Shawerma',
                'description_en' => 'Category for all types of Shawerma.',
                'description_ar' => 'فئة لجميع أنواع الشاورما.',
                'status' => 'archive',
                'created_by' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name_en' => 'juce',
                'name_ar' => 'مشروبات',
                'image' => null,
                'slug' => 'juce',
                'description_en' => 'Category for all types of juce.',
                'description_ar' => 'فئة لجميع أنواع العصائر.',
                'status' => 'archive',
                'created_by' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name_en' => 'Basta',
                'name_ar' => 'المعكرونة',
                'image' => null,
                'slug' => 'Basta',
                'description_en' => 'Category for all types of Basta.',
                'description_ar' => 'فئة لجميع أنواع المعكرونة.',
                'status' => 'archive',
                'created_by' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
