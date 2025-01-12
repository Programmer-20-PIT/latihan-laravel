<?php

namespace Database\Factories;

use app\models\kota;
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
    // unique kegunaaanya biar gak sama 
     $ini = fake()->unique()->name();
    // menghilangkan  spasi
     $itu = str_replace(' ', '', $ini);
    //strttolowe hurup mwnjadi kecil semua
     $itu = strtolower($itu);
     return [
            'name'=>$ini,
            'kota_id'=>kota::all()->random()->id,
            'jmlh_santri'=>fake()->randomDigit(),
            'web'=>$itu . '.com',
            'email'=>$itu . '.gmail.com',
            'phone'=>fake()->randomNumber(),
            'address'=>fake()->address(),
        ];
    }
}
