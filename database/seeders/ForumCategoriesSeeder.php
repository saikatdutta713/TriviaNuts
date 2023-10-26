<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ForumCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Define the data for the categories
        $categories = [
            ['name' => 'Idea', 'description' => 'Discussion about new ideas.'],
            ['name' => 'Answer', 'description' => 'Questions and answers section.'],
            ['name' => 'New Topics', 'description' => 'Discussion of new and trending topics.'],
            // Add more categories as needed
        ];

        // Insert the data into the forum_categories table
        DB::table('forum_categories')->insert($categories);
    }
}