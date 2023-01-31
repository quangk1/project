<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('business')->insert([
            'name'=> $faker->name,
            'bank_information'=> $faker->text,
            'phone'=> $faker-> phoneNumber,
            'email' => $faker-> email,
            'description' =>$faker->realText(200)


        ]);
    }
}
