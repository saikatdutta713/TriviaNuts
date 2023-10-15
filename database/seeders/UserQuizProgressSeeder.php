<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserQuizProgressSeeder extends Seeder
{
    public function run()
    {
        $progresses = [
            [
                'user_id' => 1, // Replace with the user ID
                'quiz_id' => 1, // Replace with the quiz ID
                'session_ending_time' => '2023-10-12 18:00:00', // Replace with the desired time
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 2,
                'quiz_id' => 2,
                'session_ending_time' => '2023-10-12 18:30:00',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],  
            // Add more progress records as needed...
        ];

        DB::table('user_quiz_progresses')->insert($progresses);
    }
}