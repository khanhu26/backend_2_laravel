<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Migrations;

class  CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 500; $i++){
            DB::table('courses')->insert([
                'course_name' => Str::random(10),
                'course_semester' => rand(1,5),
                'course_year' => rand(2010,2021),
            ]);
        }
    }
}
