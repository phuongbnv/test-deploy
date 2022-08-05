<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PointTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        foreach (range(1,10) as $index) {
            DB::table('point_types')->insert([
                'type' => Str::random(10),
                'point' => rand(0,10)
                ]);
        }
    }
}
