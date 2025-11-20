<?php

namespace Database\Factories;

use App\Models\VeterinaryClinic;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<VeterinaryClinic>
 */
class VeterinaryClinicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'phone' => fake()->phoneNumber(),
            'email' => fake()->email(),
        ];
    }
}
