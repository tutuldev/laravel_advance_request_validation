<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            for($i=1;$i<=8;$i++){
            User::create([
                'name'=>fake()->name(),
                'email'=> fake()->unique()->email(),
                'age' =>fake()->numberBetween(15,20),
                'city' =>fake()->city(),
                // 'created_at' => Carbon::now(),
                // 'updated_at' => Carbon::now(),
            ]);
        }
    }
}
