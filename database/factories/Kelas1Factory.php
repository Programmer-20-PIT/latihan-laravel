<?php

namespace Database\Factories;

use App\Models\kelas3;
use App\Models\kelas2;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\kelas1>
 */
class Kelas1Factory extends Factory
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
            'kelas3_id' => kelas3::all()->random()->id,
            'kelas2_id' => kelas2::all()->random()->id,

        ];
    }
}
