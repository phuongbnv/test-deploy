<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $inquiryTypeIDs = DB::table('inquiry_types')->pluck('id');
        foreach (range(1,10) as $index) {
            DB::table('contacts')->insert([
                'email' => $faker->email,
                'inquiry_type_id' => $faker->randomElement($inquiryTypeIDs),
                'title' => $faker->words(5, true),
                'content' => $faker->words(10, true)
            ]);
        }
    }
}
