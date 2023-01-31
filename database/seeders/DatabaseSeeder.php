<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(AdvertismentSeeder::class);
        $this->call(BusinessSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(FeedbackSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(PartnerSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(StyleSeeder::class);


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
