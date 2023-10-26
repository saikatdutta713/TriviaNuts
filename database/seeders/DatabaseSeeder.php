<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            RolesSeeder::class,
            CategorySeeder::class,
            QuestionSeeder::class,
            SetsSeeder::class,
            QuizSeeder::class,
            BadgesSeeder::class,
            ScoreSeeder::class,
            UserAnswersSeeder::class,
            ParticipantsSeeder::class,
            UserQuizProgressSeeder::class,
            ForumCategoriesSeeder::class,
            ForumAnswersSeeder::class,
            CommentsSeeder::class,
            ForumPostsSeeder::class,
            NotificationsSeeder::class,
        ]);
    }
}