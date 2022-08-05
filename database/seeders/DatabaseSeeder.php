<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ImmigrationSiteSeeder::class,
            RolesSeeder::class,
            UserRoleSeeder::class,
            AdvertisementsSeeder::class,
            InquiryTypeSeeder::class,
            ContactSeeder::class,
            TagSeeder::class,
            MessageSeeder::class,
            FollowSeeder::class,
            QuestionSeeder::class,
            PinQuestionSeeder::class,
            HistoryQuestionSeeder::class,
            AnswerSeeder::class,
            PointTypeSeeder::class,
            UserPointSeeder::class,
            HistoryAnswerSeeder::class,
            AnswerRateSeeder::class,
            BestAnswerSeeder::class,
            CommentSeeder::class,
            CommentRateSeeder::class,
            QuestionToTagSeeder::class,
            RequestReplySeeder::class
        ]);
    }
}
