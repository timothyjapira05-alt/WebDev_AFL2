<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Show the product catalog.
     */
    public function index()
    {
        $products = Product::orderByDesc('created_at')->get();
        return view('products', compact('products'));
    }
}

