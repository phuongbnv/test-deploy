<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImmigrationSiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
            DB::table('immigration_sites')->insert([
                'name' => $faker->words(5, true),
            ]);
        }
    }
}
