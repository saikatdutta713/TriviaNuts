<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ForumAnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run()
    {
        $data = [
            [
                'forum_answer' => 'Sample answer 1',
                'like' => 10,
                'dislike' => 2,
                'user_id' => 1, // Replace with the actual user ID
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'forum_answer' => 'Sample answer 2',
                'like' => 5,
                'dislike' => 1,
                'user_id' => 2, // Replace with another user ID
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more answers as needed
        ];

        DB::table('forum_answers')->insert($data);
    }
}