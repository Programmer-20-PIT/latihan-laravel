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
        negara::factory(20)->create();
        kota::factory(40)->create();
        sekolah::factory(80)->create();
        User::factory(240)->create();


    }
}
