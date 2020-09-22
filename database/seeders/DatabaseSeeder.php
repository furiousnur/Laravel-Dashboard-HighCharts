<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,100) as $index){
            DB::table('users')->insert([
               'name' => $faker->name,
               'email' => $faker->unique()->safeEmail,
               'password' => $faker->md5('password'),
               'created_at' => $faker->dateTimeBetween('-6 month','+1 month')
            ]);
        }
        // User::factory(10)->create();
    }
}
