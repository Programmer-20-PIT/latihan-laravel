<?php

namespace Database\Factories;

use App\Model\desa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\universitas>
 */
class UniversitasFactory extends Factory
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
            'nama'=>$ini,
            'desa_id'=>desa::all()->random()->id,
            'jumlah_siswa'=>fake()->randomNumber(),
            'web'=>$itu. '.com',
            'email'=>$itu. '.gmail.com',
            'phone'=>fake()->randomNumber(),
            'address'=>fake()->address(),

        ];
    }
}
