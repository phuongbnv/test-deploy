<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BestAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $questionIDs = DB::table('questions')->pluck('id');
        $answerIDs = DB::table('answers')->pluck('id');
        foreach (range(1,10) as $index) {
            DB::table('best_answers')->insert([
                'question_id' => $faker->randomElement($questionIDs),
                'answer_id' => $faker->randomElement($answerIDs),
            ]);
        }
    }
}
