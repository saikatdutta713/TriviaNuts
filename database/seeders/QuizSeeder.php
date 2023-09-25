<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    public function run()
    {
        // Disable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        // Define an array of demo quizzes with a 10-minute duration
        $demoQuizzes = [
            [
                'time' => '2023-09-25 10:00:00',
                'title' => 'Math Quiz 1',
                'duration' => 10, // Duration set to 10 minutes
                'category_id' => 1, // Reference to a category (replace with an actual category ID)
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'time' => '2023-09-26 14:30:00',
                'title' => 'Science Quiz 1',
                'duration' => 10, // Duration set to 10 minutes
                'category_id' => 2, // Reference to a category (replace with an actual category ID)
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more demo quizzes here...
            [
                'time' => '2023-09-27 15:45:00',
                'title' => 'History Quiz',
                'duration' => 10, // Duration set to 10 minutes
                'category_id' => 3, // Reference to a category (replace with an actual category ID)
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'time' => '2023-09-28 11:00:00',
                'title' => 'Geography Quiz',
                'duration' => 10, // Duration set to 10 minutes
                'category_id' => 4, // Reference to a category (replace with an actual category ID)
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more quiz entries as needed...
        ];

        // Insert the demo quizzes into the "quizzes" table
        DB::table('quizzes')->insert($demoQuizzes);

        // Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}