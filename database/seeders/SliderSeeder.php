<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sliders')->insert([
            [
                'name_en' => 'Bouthaina Resturant',
                'name_ar' => 'مطعم بثينة',
                'description_en' => 'This is the first slider description in English.',
                'description_ar' => 'هذا هو وصف الشريحة الأولى باللغة العربية.',
                'image' => 'null',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_en' => 'Hazem Resturant',
                'name_ar' => 'مطعم حازم',
                'description_en' => 'This is the second slider description in English.',
                'description_ar' => 'هذا هو وصف الشريحة الثانية باللغة العربية.',
                'image' => 'null',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_en' => 'Amer Resturant',
                'name_ar' => 'مطعم عامر ',
                'description_en' => 'This is the third slider description in English.',
                'description_ar' => 'هذا هو وصف الشريحة الثالثة باللغة العربية.',
                'image' => 'null',
                'created_at' => now(),
                'updated_at' => now(),
            ],


        ]);
    }
}
