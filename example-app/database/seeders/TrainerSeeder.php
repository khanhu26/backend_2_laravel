<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Migrations;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 500; $i++){
            DB::table('trainers')->insert([
                'trainer_name' => Str::random(10),
                'is_leader' => rand(0,1),
                'company_id' => rand(1,500),
                'user_id' => rand(1,500),
            ]);
        }
    }
}
