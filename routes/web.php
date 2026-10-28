<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/about_us', [PageController::class, 'about']);
Route::get('/Story', [PageController::class, 'story']);
Route::get('/Blog', [PageController::class, 'Blog']);
Route::get('/GetInTouch', [PageController::class, 'touch']);
