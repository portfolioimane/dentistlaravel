<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        Service::create([
            'name' => 'Teeth Cleaning',
            'description' => 'Professional teeth cleaning to remove plaque and tartar.',
            'price' => 50.00,
        ]);

        Service::create([
            'name' => 'Cavity Filling',
            'description' => 'Filling of dental cavities with composite materials.',
            'price' => 100.00,
        ]);

        // Add more services as needed
    }
}
