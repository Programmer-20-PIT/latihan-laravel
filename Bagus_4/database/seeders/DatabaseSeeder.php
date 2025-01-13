<?php

namespace Database\Seeders;

use App\Models\buku;
use App\Models\penulis;
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

        penulis::factory(50)->create();
        buku::factory(100)->create();
        User::factory(150)->create();

    }
}
