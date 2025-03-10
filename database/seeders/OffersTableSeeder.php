<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('offers')->insert([
            [
                'image' => '/storage/images/1737204195 - offer-01.png.png', 
                
                'link' => 'https://example.com/offer1',  
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => '/storage/images/1737204195 - offer-01.png.png',  
                'link' => 'https://example.com/offer2',  
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => '/storage/images/1737204195 - offer-01.png.png',
                'link' => 'https://example.com/offer2',  
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    
    }
}
