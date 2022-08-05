<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistoryAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $questionIDs = DB::table('answers')->pluck('id');
        foreach (range(1,10) as $index) {
            DB::table('history_answers')->insert([
                'answer_id' => $faker->randomElement($questionIDs),
                'title' => $faker->words(5, true),
                'content' => $faker->words(10, true)
            ]);
        }
    }
}
