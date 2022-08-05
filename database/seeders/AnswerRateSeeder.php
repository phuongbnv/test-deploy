<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswerRateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $coursesIDs = DB::table('users')->pluck('id');
        $answerIDs = DB::table('answers')->pluck('id');
        foreach (range(1,10) as $index) {
            DB::table('answer_rates')->insert([
                'user_id' => $faker->randomElement($coursesIDs),
                'answer_id' => $faker->randomElement($answerIDs),
                'kind' => rand(0,5)
            ]);
        }
    }
}
