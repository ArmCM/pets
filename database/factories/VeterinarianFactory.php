<?php

namespace Database\Factories;

use App\Models\Veterinarian;
use App\Models\VeterinaryClinic;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Veterinarian>
 */
class VeterinarianFactory extends Factory
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
            'email' => fake()->email(),
            'phone' => fake()->phoneNumber(),
            'license_number' => fake()->randomDigit(5),
            'specialization' => 'valid-specialization',
            'specialization_license_number' => fake()->randomDigit(10),
            'veterinary_clinic_id' => VeterinaryClinic::factory()->create(),
        ];
    }
}
