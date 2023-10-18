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
                'category_id' => 1,
                'questions' => '1,2',
                'status' => 'draft',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'time' => '2023-09-26 14:30:00',
                'title' => 'Science Quiz 1',
                'duration' => 10,
                'category_id' => 2,
                'questions' => '4,5',
                'status' => 'completed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert the demo quizzes into the "quizzes" table
        DB::table('quizzes')->insert($demoQuizzes);

        // Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
