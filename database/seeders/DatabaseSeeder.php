<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\pesantren;
use App\Models\negara;
use App\Models\kota;
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

        Negara::factory(50)->create();
        Kota::factory(150)->create();
        pesantren::factory(250)->create();
        User::factory(550)->create();
    }
}
