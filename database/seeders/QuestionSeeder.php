<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $coursesIDs = DB::table('users')->pluck('id');
        $answers = DB::table('best_answers')->pluck('id');
        foreach (range(1,10) as $index) {
            DB::table('questions')->insert([
                'user_id' => $faker->randomElement($coursesIDs),
                'title' => $faker->words(5, true),
                'view_count' => rand(0, 99999),
                'content' => $faker->words(10, true),
                'best_answer_id' => rand(0, 3),
                'is_resolved' => rand(0, 3),
            ]);
    }
    }
}
