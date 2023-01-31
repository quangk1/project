<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         $faker = Faker::create();
  
        DB::table('order')->insert([
            //'started_time'=>$faker->dateTime(),
            //'end_time'=>$faker->dateTime()
        ]);
    }
}
