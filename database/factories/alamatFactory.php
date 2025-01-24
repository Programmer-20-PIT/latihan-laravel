<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\desa;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\alamat>
 */
class AlamatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'detail'=> fake()->address(),
            'desa_id'=> desa::all()->random()->id,
        ];
    }
}
