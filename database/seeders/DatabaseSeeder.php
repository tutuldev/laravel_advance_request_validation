<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\student;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    //  $this->call([
    //     StudentSeeder::class
    //  ]);

    // student::factory()->count(10)->create();

    // short cut
    // student::factory(5)->create();

        $this->call([
        StudentSeeder::class,
        UserSeeder::class
     ]);
    }
}
