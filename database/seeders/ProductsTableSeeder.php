<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $now = Carbon::now();
        $products = [
            [
                'name' => 'Classic Mechanical Keyboard',
                'description' => 'Tactile mechanical switches, RGB backlight.',
                'price' => 69.99,
                'image_url' => 'https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=500&h=400&fit=crop&q=80',
                'created_at' => $now, 'updated_at' => $now
            ],
            [
                'name' => 'Gaming Mouse Pro',
                'description' => 'High DPI, ergonomic shape.',
                'price' => 39.99,
                'image_url' => 'https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?w=500&h=400&fit=crop&q=80',
                'created_at' => $now, 'updated_at' => $now
            ],
            [
                'name' => '27" 4K Monitor',
                'description' => 'IPS panel with HDR support.',
                'price' => 249.99,
                'image_url' => 'https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=500&h=400&fit=crop&q=80',
                'created_at' => $now, 'updated_at' => $now
            ],
            [
                'name' => 'USB-C Docking Station',
                'description' => 'Multiple ports for productivity.',
                'price' => 89.99,
                'image_url' => 'https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?w=500&h=400&fit=crop&q=80',
                'created_at' => $now, 'updated_at' => $now
            ],
            [
                'name' => 'Wireless Headphones',
                'description' => 'Noise cancelling, 30h battery.',
                'price' => 129.99,
                'image_url' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=500&h=400&fit=crop&q=80',
                'created_at' => $now, 'updated_at' => $now
            ],
        ];

        DB::table('products')->insert($products);
    }
}
