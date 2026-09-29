<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    protected $model = Patient::class;

    public function definition(): array
    {
        return [
            'student_id' => $this->faker->unique()->numerify('ST-####'),
            'name' => $this->faker->name(),
            'course' => $this->faker->randomElement(['BSIT', 'BSCS', 'BSBA', 'BSED', 'BSN']),
            'year_level' => $this->faker->randomElement(['1st Year', '2nd Year', '3rd Year', '4th Year']),
        ];
    }
}
