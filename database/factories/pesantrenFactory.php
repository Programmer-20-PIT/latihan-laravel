<?php

namespace Database\Factories;

use App\Models\negara;
use App\Models\Kota;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pesantren>
 */
class PesantrenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->company(),
            'negara_id' => negara::all()->random()->id,
            'kota_id' => Kota::all()->random()->id,
        ];
    }
}
