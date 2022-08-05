<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $coursesIDs = DB::table('users')->pluck('id');
        foreach (range(1,10) as $index) {
            DB::table('messages')->insert([
                'from_user_id' => $faker->randomElement($coursesIDs),
                'to_user_id' => $faker->randomElement($coursesIDs),
                'messages' => $faker->words(10, true)
            ]);
        }
    }
}
