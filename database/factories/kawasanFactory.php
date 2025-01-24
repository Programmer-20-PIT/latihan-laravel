<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\pesantren;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\kawasan>
 */
class KawasanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name('id'),
            'pesantren_id' => pesantren::all()->random()->id,
        ];
    }
}
