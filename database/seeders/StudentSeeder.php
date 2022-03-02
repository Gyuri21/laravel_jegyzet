<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("students")->insert([
            "name"=>"Ka Pál",
            "email"=>"pali@valami.hu",
            "phone"=> "123456789",
            "age"=>10,
            "gender"=>"male",
            "address"=>"Szeged Kő u. 3."
        ]);
    }
}
