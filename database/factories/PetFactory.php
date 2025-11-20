<?php

namespace Database\Factories;

use App\Models\Pet;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

/**
 * @extends Factory<Pet>
 */
class PetFactory extends Factory
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
            'birthday' => now()->subYears(4)->format('Y-m-d'),
            'weight' => 225,
            'breed' => 'fake',
            'color' => Arr::random(['white', 'gray', 'orange']),
            'distinctive_marks' => 'spot white in tail and stripes amber',
            'identification_number' => Str::random(10),
            'specie' => Arr::random(['feline', 'canine', 'beaver']),
            'user_id' => User::factory()->create(),
        ];
    }
}
