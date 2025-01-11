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
        // User::factory(10)->create();

    negara::factory(30)->create();
    kota::factory(30)->create();
    sekolah::factory(30)->create();
    user::factory(150)->create();
    }
}
