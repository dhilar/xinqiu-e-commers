<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Vehicle::create([
            'name' => 'XQ-S015',
            'image' => 'asset/images/Type_B-02.jpeg',
            'price' => 1000000,
        ]);
    
        \App\Models\Vehicle::create([
            'name' => 'XQ-S018',
            'image' => 'asset/images/Type_Robot.jpeg',
            'price' => 1000000,
        ]);

        \App\Models\Vehicle::create([
            'name' => 'Type B-02',
            'image' => 'asset/images/Type_B-02.jpeg',
            'price' => 1000000,
        ]);

        \App\Models\Vehicle::create([
            'name' => 'Type S-600',
            'image' => 'asset/images/Type_S-600.jpeg',
            'price' => 1000000,
        ]);
    }
}
