<?php

namespace Database\Factories;

use App\Model\kota;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\desa>
 */
class DesaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' =>fake(),vilage(),
            'kota_id' => kota::all()->random(),
        ];
    }
}
