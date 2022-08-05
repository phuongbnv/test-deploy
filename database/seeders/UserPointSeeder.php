<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserPointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $coursesIDs = DB::table('users')->pluck('id');
        $pointTypeIDs = DB::table('point_types')->pluck('id');
        foreach (range(1,10) as $index) {
            DB::table('user_point')->insert([
                'user_id' => $faker->randomElement($coursesIDs),
                'point_type_id' => $faker->randomElement($pointTypeIDs),
                ]);
        }
    }
}
