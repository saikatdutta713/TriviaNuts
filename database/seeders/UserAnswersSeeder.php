<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserAnswersSeeder extends Seeder
{
    public function run()
    {
        $userAnswers = [
            [
                'answer_id' => 1, // Replace with the desired answer_id
                'chosen_option' => 'A', // Replace with the chosen_option value
                'question_id' => 1, // Replace with the desired question_id
                'participant_id' => 1, // Replace with the desired participant_id
                'user_id' => 1, // Replace with the desired user_id
                'quiz_id' => 1, // Replace with the desired quiz_id
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'answer_id' => 2, // Replace with the desired answer_id
                'chosen_option' => 'B', // Replace with the chosen_option value
                'question_id' => 2, // Replace with the desired question_id
                'participant_id' => 1, // Replace with the desired participant_id
                'user_id' => 1, // Replace with the desired user_id
                'quiz_id' => 1, // Replace with the desired quiz_id
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Add more user answers as needed...
        ];

        DB::table('user_answers')->insert($userAnswers);
    }
}