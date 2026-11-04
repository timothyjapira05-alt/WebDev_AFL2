<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // Kosongkan gambar BLOB lama
        DB::table('products')->update(['image' => null]);
        DB::table('blog_posts')->update(['image' => null]);

        // Ubah kolom gambar menjadi image path
        Schema::table('products', function (Blueprint $table) {
            $table->string('image')->nullable()->change();
        });

        Schema::table('blog_posts', function (Blueprint $table) {
            $table->string('image')->nullable()->change();
            $table->dropColumn('image_mime_type');
        });
    }

    public function down(): void
    {
        // Tidak mengembalikan format BLOB.
    }
};