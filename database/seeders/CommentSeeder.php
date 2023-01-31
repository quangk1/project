<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
class CommentSeeder extends Seeder
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
        DB::table('comment')->insert([
            'customer_id' =>0,
            'product_id' =>0,
            'rating' => $faker->randomDigit(),
            'commented_date' => $faker->date()
        ]);
    }
}
