<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(['id', 'name', 'description', 'price', 'image_url']);
        
        return response()->json($products, 200, [
            'Content-Type' => 'application/json'
        ]);
    }
}
