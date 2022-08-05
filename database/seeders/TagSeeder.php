<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        foreach (range(1,10) as $index) {
            DB::table('tags')->insert([
                'name' => $faker->words(1, true)
            ]);
        }
    }
}
