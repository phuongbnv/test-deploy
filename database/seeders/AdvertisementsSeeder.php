<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdvertisementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
            $nameImage = Str::random(20).'.jpg';
            DB::table('advertisements')->insert([
                'img' => $nameImage,
                'url' => $faker->domainName.'/'.$nameImage,
                'title' => $faker->words(5, true),
            ]);
        }
    }
}
