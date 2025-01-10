<?php

namespace Database\Seeders;

use App\Models\Kota;
use App\Models\Negara;
use App\Models\Pesantren;
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
        Negara::factory(25)->create();
        Kota::factory(500)->create();
        Pesantren::factory(1000)->create();
        User::factory(2500)->create();
    }
}
