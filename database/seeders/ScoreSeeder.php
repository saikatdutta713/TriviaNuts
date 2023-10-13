<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ScoreSeeder extends Seeder
{
    public function run()
    {
        $scores = [
            [
                'quiz_id' => 1,
                'participant_id' => 1,
                'user_id' => 1,
                'badge_id' => 1,
                'right_answer' => 5,
                'wrong_answer' => 2,
                'score_value' => 75,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'quiz_id' => 2,
                'participant_id' => 2,
                'user_id' => 2,
                'badge_id' => 2,
                'right_answer' => 8,
                'wrong_answer' => 1,
                'score_value' => 92,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Add more score records as needed
        ];

        // Insert the data into the scores table
        DB::table('scores')->insert($scores);
    }
}