<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PinQuestionSeeder extends Seeder
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
            DB::table('pin_questions')->insert([
                'question_id' => $faker->randomElement($questions),
                'order' => rand(0,10)
            ]);
    }
    }
}
