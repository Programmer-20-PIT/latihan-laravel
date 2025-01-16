<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\kelas1;
use App\Models\kelas2;
use App\Models\kelas3;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $kelas=kelas3::factory(10)->create();
        foreach ($kelas as $key => $value) {
            $kelas2=kelas2::factory(10)->create([
                'kelas3_id'=>$value->id
            ]);
            foreach ($kelas2 as $key2 => $value2) {
                $kelas1=kelas1::factory(10)->create([
                    'kelas2_id'=>$value2->id,
                    'kelas3_id'=>$value->id
                ]);
            }
        }
        // kelas2::factory(100)->create();
        // kelas1::factory( 10)->create();
        // User::factory()->create([
        //     'name' => 'ciuy',
        //     // 'email' => 'ci@gmail.com',
        // ]);
        User::factory(90)->create();
    }
}
