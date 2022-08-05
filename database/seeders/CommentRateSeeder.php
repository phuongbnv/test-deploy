<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentRateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $coursesIDs = DB::table('users')->pluck('id');
        $commentIDs = DB::table('comments')->pluck('id');
        foreach (range(1,10) as $index) {
            DB::table('comment_rates')->insert([
                'user_id' => $faker->randomElement($coursesIDs),
                'comment_id' => $faker->randomElement($commentIDs),
                'kind' => rand(0,5)
            ]);
        }
    }
}
