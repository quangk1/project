<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        for ($i=0; $i < 10; $i++) 
        DB::table('customer')->insert([
            'fullname' => $faker->name,
            'gender'=> $faker->randomElement(['male', 'female']),
            'DOB' => $faker->dateTime(),
            'address' => $faker->address,
            'phone' => $faker-> phoneNumber,
            'email' =>  $faker-> email
        ]);
    }
}
