<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ForumPostsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'post_id' => 1, // Replace with your desired post ID
                'content' => 'Sample post content 1',
                'like' => 20,
                'dislike' => 5,
                'answer_id' => 1, // Replace with the related answer's ID
                'user_id' => 1, // Replace with the actual user ID
                'comment_id' => 1, // Replace with the actual comment ID
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => 2, // Replace with your desired post ID
                'content' => 'Sample post content 2',
                'like' => 15,
                'dislike' => 3,
                'answer_id' => 2, // Replace with the related answer's ID
                'user_id' => 2, // Replace with the actual user ID
                'comment_id' => 2, // Replace with the actual comment ID
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more forum posts as needed
        ];

        DB::table('forum_posts')->insert($data);
    }
}