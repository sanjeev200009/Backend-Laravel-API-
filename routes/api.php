<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/health', function () {
    return response()->json([
        'status' => 'healthy',
        'timestamp' => now(),
        'version' => '1.0.0'
    ]);
});

Route::middleware('api')->group(function () {
    // Add your API routes here
    
    // Example: Product routes
    // Route::apiResource('products', ProductController::class);
});