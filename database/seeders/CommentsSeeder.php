<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'comment_id' => 1, // Replace with your desired comment ID
                'content' => 'Sample comment 1',
                'likes' => 10,
                'dislikes' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment_id' => 2, // Replace with your desired comment ID
                'content' => 'Sample comment 2',
                'likes' => 5,
                'dislikes' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more comments as needed
        ];

        DB::table('comments')->insert($data);
    }
}