<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Appointment;
use App\Models\User;
use App\Models\Service;
use Carbon\Carbon;

class AppointmentSeeder extends Seeder
{
    public function run()
    {
        // Fetch Users and Services
        $patient1 = User::where('email', 'patient1@example.com')->first();
        $patient2 = User::where('email', 'patient2@example.com')->first();
        $service1 = Service::where('name', 'Teeth Cleaning')->first();
        $service2 = Service::where('name', 'Cavity Filling')->first();

        // Create Appointments
        Appointment::create([
            'user_id' => $patient1->id,
            'service_id' => $service1->id,
            'appointment_date' => Carbon::now()->addDays(1),
            'status' => 'confirmed',
        ]);

        Appointment::create([
            'user_id' => $patient2->id,
            'service_id' => $service2->id,
            'appointment_date' => Carbon::now()->addDays(2),
            'status' => 'pending',
        ]);
    }
}
