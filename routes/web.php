<?php

use Illuminate\Support\Facades\Route;

// Redirect root to API documentation or frontend
Route::get('/', function () {
    return response()->json([
        'message' => 'Product API',
        'version' => '1.0',
        'endpoints' => [
            'GET /api/products' => 'Get all products'
        ]
    ]);
});
