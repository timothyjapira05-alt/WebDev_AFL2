<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

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
                'image' => 'Tropical_Splash.jpg',
            ],
            [
                'name' => 'Fresh Immunity',
                'description' => 'Kombinasi nanas, apel, dan wortel dengan rasa segar dan alami.',
                'ingredients' => 'Pineapple, Apple, Carrot',
                'price' => 20000,
                'image' => 'Fresh_Immunity.jpg',
            ],
            [
                'name' => 'Green Vitality',
                'description' => 'Kombinasi nanas, apel, dan pakcoy untuk pilihan minuman sayur yang segar.',
                'ingredients' => 'Pineapple, Apple, Pakcoy',
                'price' => 20000,
                'image' => 'Green_Vitality.jpg',
            ],
        ];

        foreach ($products as $product) {

            $imagePath = public_path('assets/' . $product['image']);

            if (!File::exists($imagePath)) {
                throw new \RuntimeException(
                    'Gambar tidak ditemukan: ' . $imagePath
                );
            }

            $imageData = File::get($imagePath);

            DB::table('products')->updateOrInsert(
                ['name' => $product['name']],
                [
                    'description' => $product['description'],
                    'ingredients' => $product['ingredients'],
                    'price' => $product['price'],
                    'image' => $imageData,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
