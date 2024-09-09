<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Tambahkan data produk secara manual dengan deskripsi
        Product::create([
            'name' => 'XQ-S015',
            'description' => 'Deskripsi untuk XQ-S015. Produk ini sangat cocok untuk kebutuhan Anda.',
            'image' => 'asset/images/XQ-SO15.jpeg',
            'price' => 1000000,
        ]);

        Product::create([
            'name' => 'XQ-S018',
            'description' => 'Deskripsi untuk XQ-S018. Didesain dengan kualitas tinggi.',
            'image' => 'asset/images/XQ-SO18.jpeg',
            'price' => 1000000,
        ]);

        Product::create([
            'name' => 'XQ-S013',
            'description' => 'Deskripsi untuk XQ-S013. Produk ini menawarkan nilai terbaik.',
            'image' => 'asset/images/XQ-SO13.jpeg',
            'price' => 1000000,
        ]);

        Product::create([
            'name' => 'Type JP 25',
            'description' => 'Deskripsi untuk Type JP 25. Solusi terbaik untuk keperluan Anda.',
            'image' => 'asset/images/Type JP 25.png',
            'price' => 1000000,
        ]);

        Product::create([
            'name' => 'Type Starlight',
            'description' => 'Deskripsi untuk Type Starlight. Produk ini dirancang dengan elegan.',
            'image' => 'asset/images/Type Starlight.png',
            'price' => 1000000,
        ]);

        Product::create([
            'name' => 'Type-Vision',
            'description' => 'Deskripsi untuk Type-Vision. Menawarkan visibilitas tinggi.',
            'image' => 'asset/images/Type-Vision.png',
            'price' => 1000000,
        ]);

        // Anda bisa menambahkan lebih banyak produk sesuai kebutuhan
    }
}
