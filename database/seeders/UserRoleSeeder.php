<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $coursesIDs = DB::table('users')->pluck('id');
        $studentsIDs= DB::table('roles')->pluck('id');

        foreach (range(1,10) as $index) {
            DB::table('user_role')->insert([
                'user_id' => $faker->randomElement($coursesIDs),
                'role_id' => $faker->randomElement($studentsIDs)
            ]);
    } 
    }
}
