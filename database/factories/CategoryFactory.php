<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // مثيل للـ Faker باللغة الإنجليزية
        $fakerEn = \Faker\Factory::create('en_US');

        // مثيل للـ Faker باللغة العربية
        $fakerAr = \Faker\Factory::create('ar_SA');

        return [
            'name_en' => $fakerEn->name(),
            'name_ar' => $fakerAr->name(),
            'description_en' => $fakerEn->sentence(),
            'description_ar' => $fakerAr->sentence(),
            'status' => $fakerEn->randomElement(['active', 'archive']),
            'image' => null,
            'slug' => $fakerEn->slug(),
            'created_by' => 1,
        ];
    }
}
