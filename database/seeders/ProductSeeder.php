<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Tropical Splash',
                'description' => 'Perpaduan semangka, nanas, dan lemon yang menyegarkan.',
                'ingredients' => 'Watermelon, Pineapple, Lemon',
                'price' => 20000,
                'image' => 'assets/Tropical_Splash.jpg',
            ],
            [
                'name' => 'Fresh Immunity',
                'description' => 'Kombinasi nanas, apel, dan wortel dengan rasa segar dan alami.',
                'ingredients' => 'Pineapple, Apple, Carrot',
                'price' => 20000,
                'image' => 'assets/Fresh_Immunity.jpg',
            ],
            [
                'name' => 'Green Vitality',
                'description' => 'Kombinasi nanas, apel, dan pakcoy untuk pilihan minuman sayur yang segar.',
                'ingredients' => 'Pineapple, Apple, Pakcoy',
                'price' => 20000,
                'image' => 'assets/Green_Vitality.jpg',
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->updateOrInsert(
                ['name' => $product['name']],
                [
                    'description' => $product['description'],
                    'ingredients' => $product['ingredients'],
                    'price' => $product['price'],
                    'image' => $product['image'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}