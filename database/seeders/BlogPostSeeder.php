<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class BlogPostSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Kenapa Semangka Sangat Bagus Setelah Berolahraga?',
                'category' => 'Hidrasi & Recovery',
                'description' => 'Semangka memiliki kandungan air yang tinggi dan menjadi pilihan menyegarkan untuk membantu memenuhi kebutuhan cairan setelah berolahraga.',
                'content' => 'Semangka merupakan buah dengan kandungan air yang tinggi. Setelah berolahraga, tubuh membutuhkan cairan untuk menggantikan cairan yang hilang melalui keringat. Semangka dapat menjadi salah satu pilihan untuk membantu memenuhi kebutuhan hidrasi. Buah ini juga mengandung likopen dan L-sitrulin.',
                'image' => 'Tropical_Splach_tangan.jpg',
            ],
            [
                'title' => 'Rahasia Kombinasi Vitamin A & C pada Wortel dan Apel',
                'category' => 'Imunitas & Kulit',
                'description' => 'Wortel mengandung beta-karoten yang dapat diubah menjadi vitamin A, sedangkan apel dan nanas memberikan rasa segar serta nutrisi tambahan.',
                'content' => 'Wortel mengandung beta-karoten yang dapat diubah oleh tubuh menjadi vitamin A. Vitamin A berperan dalam menjaga kesehatan mata dan fungsi sistem kekebalan tubuh. Apel juga mengandung serat dan senyawa antioksidan. Kombinasi wortel, apel, dan nanas menghasilkan perpaduan rasa yang segar.',
                'image' => 'Fresh_Immunity_tangan.jpg',
            ],
            [
                'title' => 'Cara Menikmati Sayur Hijau Tanpa Bau Langu',
                'category' => 'Detoksifikasi Alami',
                'description' => 'Pakcoy, nanas, dan apel memberikan perpaduan rasa segar dan manis alami untuk menikmati sayuran hijau.',
                'content' => 'Sayuran hijau memiliki berbagai nutrisi yang bermanfaat bagi tubuh. Namun, sebagian orang kurang menyukai rasa khas sayuran hijau. Salah satu cara menikmatinya adalah dengan mengombinasikannya bersama buah-buahan. Perpaduan pakcoy, nanas, dan apel memberikan rasa yang lebih segar dan seimbang.',
                'image' => 'Green_Vitality_tangan.jpg',
            ],
        ];

        foreach ($posts as $post) {

            $imagePath = public_path('assets/' . $post['image']);

            if (!File::exists($imagePath)) {
                throw new \RuntimeException(
                    'Gambar tidak ditemukan: ' . $imagePath
                );
            }

            $imageData = File::get($imagePath);
            $mimeType = File::mimeType($imagePath);

            DB::table('blog_posts')->updateOrInsert(
                ['title' => $post['title']],
                [
                    'category' => $post['category'],
                    'description' => $post['description'],
                    'content' => $post['content'],
                    'image' => $imageData,
                    'image_mime_type' => $mimeType,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
