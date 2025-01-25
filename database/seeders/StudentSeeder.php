<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // why to fake data singel
        // student::create([
        //     'name'=>fake()->name(),
        //     'email'=> fake()->unique()->email()
        // ]);
        // add multiple fake data

        // its for seeder -->>>>

        // for($i=1;$i<=10;$i++){
        //     student::create([
        //         'name'=>fake()->name(),
        //         'email'=> fake()->unique()->email()
        //     ]);
        // }

        // student seeder by factory
        student::factory(5)->create();

        // users  seeder by seeder method

        //     for($i=1;$i<=10;$i++){
        //     student::create([
        //         'name'=>fake()->name(),
        //         'email'=> fake()->unique()->email(),
        //         'age' =>fake()->numberBetween(15,20),
        //         'city' =>fake()->city(),
        //     ]);
        // }


        // way to real data
        // $json=File::get(path:'database/json/students.json');
        // $students=collect(json_decode($json));

        // $students->each(function ($student){
        //         // student::insert($student);
        //         student::create([
        //             'name'=>$student->name,
        //             'email'=> $student->email
        //         ]);
        // });

    }
}
