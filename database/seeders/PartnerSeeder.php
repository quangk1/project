<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i < 100; $i++)

        DB::table('partner')->insert([
            'name' => $faker->company,
            'phone' => $faker->phoneNumber,
            'website' => $faker->domainName,
            'email' => $faker->email,
            'description' =>$faker->realText(200)
        ]);
    }
}
