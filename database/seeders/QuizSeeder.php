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

        // Define an array of demo quizzes
        $demoQuizzes = [
            [
                'time' => '2023-09-25 10:00:00',
                'title' => 'Math Quiz 1',
                'duration' => 10,
                'category_id' => 1, // Replace with an actual category ID from your "categories" table
                'set_id' => 1, // Replace with an actual set ID from your "sets" table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'time' => '2023-09-26 14:30:00',
                'title' => 'Science Quiz 1',
                'duration' => 10,
                'category_id' => 2, // Replace with an actual category ID
                'set_id' => 2, // Replace with an actual set ID
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more demo quizzes here...
        ];

        // Insert the demo quizzes into the "quizzes" table
        DB::table('quizzes')->insert($demoQuizzes);

        // Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}