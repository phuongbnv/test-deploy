<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RequestReplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $coursesIDs = DB::table('users')->pluck('id');
        $questionsIDs = DB::table('questions')->pluck('id');
        foreach (range(1,10) as $index) {
            DB::table('request_replys')->insert([
                'user_id' => $faker->randomElement($coursesIDs),
                'question_id' => $faker->randomElement($questionsIDs),
                'request_to_user_id' => $faker->randomElement($coursesIDs),
            ]);
        }
    }
}
