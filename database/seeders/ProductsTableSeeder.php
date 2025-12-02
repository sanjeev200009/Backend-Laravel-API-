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
                'image_url' => 'https://example.com/images/keyboard.jpg',
                'created_at' => $now, 'updated_at' => $now
            ],
            [
                'name' => 'Gaming Mouse Pro',
                'description' => 'High DPI, ergonomic shape.',
                'price' => 39.99,
                'image_url' => 'https://example.com/images/mouse.jpg',
                'created_at' => $now, 'updated_at' => $now
            ],
            [
                'name' => '27" 4K Monitor',
                'description' => 'IPS panel with HDR support.',
                'price' => 249.99,
                'image_url' => 'https://example.com/images/monitor.jpg',
                'created_at' => $now, 'updated_at' => $now
            ],
            [
                'name' => 'USB-C Docking Station',
                'description' => 'Multiple ports for productivity.',
                'price' => 89.99,
                'image_url' => 'https://example.com/images/dock.jpg',
                'created_at' => $now, 'updated_at' => $now
            ],
            [
                'name' => 'Wireless Headphones',
                'description' => 'Noise cancelling, 30h battery.',
                'price' => 129.99,
                'image_url' => 'https://example.com/images/headphones.jpg',
                'created_at' => $now, 'updated_at' => $now
            ],
        ];

        DB::table('products')->insert($products);
    }
}
