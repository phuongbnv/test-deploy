<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FollowSeeder extends Seeder
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
            DB::table('follows')->insert([
                'user_id' => $faker->randomElement($coursesIDs),
                'follow_to_user_id' => $faker->randomElement($coursesIDs),
            ]);
    }
    }
}
