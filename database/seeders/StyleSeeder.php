<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) // tạo 10 bản ghi 
        DB::table('style')->insert([
            'name'=> Str::random(30), // tạo string random độ dài tối đa là 30
            'description' =>Str::random(100)
        ]);
    }
}
