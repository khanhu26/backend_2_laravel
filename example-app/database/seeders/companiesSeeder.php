<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class companiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i =0;$i <5000000;$i++){
			DB::table('companies')->insert([
            'company_name' => Str::random(55),
            'company_web' => Str::random(255),
            'company_address' => Str::random(500),
            'company_code' => Str::random(55),
            'company_phone' => Str::random(55),
        ]);
		}
    }
}
