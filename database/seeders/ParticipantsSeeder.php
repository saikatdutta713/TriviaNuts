<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParticipantsSeeder extends Seeder
{
    public function run()
    {
        // Example quiz participants data
        $participants = [
            [
                'answer_id' => 1,
                'badge_id' => 1,
                'question_id' => 1,
                'score_id' => 1, // Make sure this corresponds to a valid score_id
                'user_id' => 1,
                'quiz_id' => 1,
                'total_time_consumed' => 1200,
                'per_question_time' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'answer_id' => 2,
                'badge_id' => 2,
                'question_id' => 2,
                'score_id' => 2, // Make sure this corresponds to a valid score_id
                'user_id' => 2,
                'quiz_id' => 1,
                'total_time_consumed' => 1500,
                'per_question_time' => 75,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more participant data as needed...
        ];

        // Insert the data into the quiz_participants table
        DB::table('quiz_participants')->insert($participants);
    }
}