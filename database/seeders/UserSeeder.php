<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Create Admin User
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // Replace with a secure password
            'phone_number' => '123-456-7890',
            'role' => User::ROLE_ADMIN,
        ]);

        // Create Patient Users
        User::create([
            'name' => 'Patient One',
            'email' => 'patient1@example.com',
            'password' => Hash::make('password'),
            'phone_number' => '555-1234',
            'role' => User::ROLE_PATIENT,
        ]);

        User::create([
            'name' => 'Patient Two',
            'email' => 'patient2@example.com',
            'password' => Hash::make('password'),
            'phone_number' => '555-5678',
            'role' => User::ROLE_PATIENT,
        ]);

        // Add more patients as needed
    }
}
