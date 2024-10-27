<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
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
            'name_ar' => $fakerAr->name(),
            'name_en' => $fakerEn->name(),
            'image' => null,
            'slug' => $fakerEn->slug(),
            'quantity' => $fakerEn->numberBetween(0, 100),
            'content_ar' => $fakerAr->sentence(),
            'content_en' => $fakerEn->sentence(),
            'status' => $fakerEn->randomElement(['active', 'archive']),
            'category_id' => Category::inRandomOrder()->pluck('id')->first(),
            'created_by' => Admin::inRandomOrder()->pluck('id')->first(),
        ];
    }
}
