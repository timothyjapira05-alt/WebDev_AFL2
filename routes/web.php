<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PartnerController;

Route::get('/', [PageController::class, 'home']);
Route::get('/pesan', [PageController::class, 'pesan']);
Route::get('/order', [PageController::class, 'pesan']);
Route::get('/about_us', [PageController::class, 'about']);
Route::get('/Story', [PageController::class, 'story']);
Route::get('/Blog', [BlogController::class, 'index']);
Route::get('/GetInTouch', [PageController::class, 'touch']);
Route::post('/GetInTouch', [PartnerController::class, 'store'])->name('partners.store');
Route::get('/products', [ProductController::class, 'index'])->name('products');
