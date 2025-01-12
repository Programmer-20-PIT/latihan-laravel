<?php

namespace Database\Seeders;

use App\Models\negara;
use App\Models\kota;
use App\Models\pesantren;
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
      negara::factory(50)->create();
      kota::factory(100)->create();
      pesantren::factory(200)->create();
      User::factory(1000)->create();
    }
}
