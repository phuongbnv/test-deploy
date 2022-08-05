<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionToTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $questionIDs = DB::table('questions')->pluck('id');
        $tagIDs = DB::table('tags')->pluck('id');
        foreach (range(1,10) as $index) {
            DB::table('question_to_tags')->insert([
                'question_id' => $faker->randomElement($questionIDs),
                'tag_id' => $faker->randomElement($tagIDs),
            ]);
        }
    }
}
