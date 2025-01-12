<?php

namespace Database\Seeders;

use App\Models\kota;
use App\Models\negara;
use App\Models\sekolah;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        negara::factory(80)->create();
        kota::factory(500)->create();
        sekolah::factory(800)->create();
        User::factory(1000)->create();


    }
}
