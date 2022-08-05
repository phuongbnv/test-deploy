<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistoryQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $questions = DB::table('questions')->pluck('id');
        foreach (range(1,10) as $index) {
            DB::table('history_questions')->insert([
                'question_id' => $faker->randomElement($questions),
                'title' => $faker->words(10, true),
                'content' => $faker->words(10, true)
            ]);
    }
    }
}
