<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Define an array of categories
        $categories = [
            [
                'category_title' => 'Mathematics',
                'description' => 'Mathematics category description',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_title' => 'Aptitude',
                'description' => 'Aptitude category description',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_title' => 'Current Affairs',
                'description' => 'Current Affairs category description',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_title' => 'Computer',
                'description' => 'Computer category description',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more categories here...
        ];

        // Insert the categories into the "categories" table
        DB::table('categories')->insert($categories);
    }
}