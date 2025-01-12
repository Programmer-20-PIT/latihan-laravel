<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\kelas3;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\kelas2>
 */
class Kelas2Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'kelas3_id' => kelas3::all()->random()->id,
        ];
    }
}
