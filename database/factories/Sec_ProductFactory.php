<?php

namespace Database\Factories;

use App\Models\Sec_Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Sec_ProductFactory extends Factory
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

        $product = \App\Models\Product::inRandomOrder()->first();

        $product->meals()->count();
        $i = $product->meals()->count();
        while($product->meals()->count() < 2){
            $i += 1;
            Sec_Product::create([
                'name_en'  => $fakerEn->name(),
                'name_ar'  => $fakerAr->name(),
                'price'    => $fakerEn->numberBetween(0, 100),
                'compare_price' => $fakerEn->numberBetween(0, 100),
                'num_meal' => $i,
                'product_id' => $product->id,
            ]);
        }
        return [
            'name_en'  => $fakerEn->name(),
            'name_ar'  => $fakerAr->name(),
            'price'    => $fakerEn->numberBetween(0, 100),
            'compare_price' => $fakerEn->numberBetween(0, 100),
            'num_meal' => $i+1,
            'product_id' => $product->id,
        ];
    }
}
