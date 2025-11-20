<?php

namespace Database\Factories;

use App\Models\Vaccine;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Vaccine>
 */
class VaccineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'vaccine_name' => $this->faker->word(),
            'vaccine_type' => $this->faker->word(),
            'vaccine_batch_number' => $this->faker->randomNumber(),
            'manufacturer' => $this->faker->word(),
            'application_date' => now()->format('Y-m-d'),
            'next_application_date' => now()->addYear()->format('Y-m-d'),
        ];
    }
}
