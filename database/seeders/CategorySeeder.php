<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $cats = array('TV','Điện thoại','Đèn','Quạt'); //tạo 1 xâu nhiều giá trị
        foreach ($cats as $cat)
        DB::table('category')->insert([
            'name' => $faker->name,
            'parent_id' => 0, 
            'feature'=> true

        ]);
    }
}
