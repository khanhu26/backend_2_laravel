<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class trainersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i =0;$i <5000000;$i++){
			DB::table('trainers')->insert([
            'trainer_name' => Str::random(55),
            'company_id' => Str::random(11),
            'trainer_email' => Str::random(500),
            'trainer_phone' => Str::random(55),
        ]);
		}
    }
}
