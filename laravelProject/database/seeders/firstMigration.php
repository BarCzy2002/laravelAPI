<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;


class firstMigration extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 1; $i <= 200; $i++){
            DB::table('people')->insert([

                'name' => $faker->firstName,
                'lastname' => $faker->lastName,
                'phoneNumber' => $faker->phoneNumber,
                'address' => $faker->address,
                'country' => $faker->country,
            ]);
        }
    }
}
