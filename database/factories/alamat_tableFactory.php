<?php

namespace Database\Factories;

use App\Models\alamat;
use App\Models\pesantren;
use App\Models\kawasan;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\alamat_table>
 */
class alamat_tableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'alamat_id'=>alamat::all()->random()->id,
            'alamat_table_id' => fake()->randomElement([
                pesantren::all()->random()->id,
                kawasan::all()->random()->id,
                User::all()->random()->id,
            ]),
            'alamat_table_type'=>fake()->randomElement([
                pesantren::class,
                kawasan::class,
                User::class,
            ])
        ];
    }
}
