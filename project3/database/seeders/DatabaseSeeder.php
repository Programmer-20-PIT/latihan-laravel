<?php

namespace Database\Seeders;

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
       kota::factory(50)->create();
       desa::factory(100)->create();
       universitas::factory(150)->create();
       user::factory(300)->create();
    }
}
