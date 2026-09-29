<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $doctors = Doctor::factory(10)->create();
        $patients = Patient::factory(20)->create();

        foreach ($patients as $index => $patient) {
            Appointment::factory()->create([
                'patient_id' => $patient->id,
                'doctor_id' => $doctors[$index % $doctors->count()]->id,
                'appointment_date' => now()->addDays($index + 1),
                'status' => $index % 2 === 0 ? 'scheduled' : 'completed',
            ]);
        }
    }
}
