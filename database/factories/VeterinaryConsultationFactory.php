<?php

namespace Database\Factories;

use App\Models\Pet;
use App\Models\Veterinarian;
use App\Models\VeterinaryConsultation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<VeterinaryConsultation>
 */
class VeterinaryConsultationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'reason_for_visit' => fake()->words(6),
            'type' => fake()->words(4),
            'observations' => fake()->words(10),
            'status' => 'pending',
            'pet_id' => Pet::factory()->create(),
            'veterinarian_id' => Veterinarian::factory()->create(),
        ];
    }
}
