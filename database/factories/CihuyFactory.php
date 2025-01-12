<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cihuy>
 */
class CihuyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nick = fake()->unique()->name();
        $name = str_replace(' ','',$nick);
        $name = strtolower($name);
        return [
            'name'=> $nick,
            'jumlah_orang' => fake()->randomNumber(),
            'jumlah' => fake()->randomNumber(),
            'email'=> $name. '@gmail.com',
            'web'=> $nick.'com',
            'phone'=> fake()->randomNumber(),
        ];
    }
}
