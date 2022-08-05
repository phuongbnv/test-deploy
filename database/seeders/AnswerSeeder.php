<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $coursesIDs = DB::table('users')->pluck('id');
        $questionIDs = DB::table('questions')->pluck('id');
        foreach (range(1,10) as $index) {
            DB::table('answers')->insert([
                'user_id' => $faker->randomElement($coursesIDs),
                'question_id' => $faker->randomElement($questionIDs),
                'content' => $faker->words(10, true)
            ]);
    }
    }
}
