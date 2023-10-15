<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Set;

class SetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define the data you want to insert
        $setData = [
            [
                'title' => 'Set 1',
                'question_ids' => json_encode(['question_id_1', 'question_id_2']),
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Set 2',
                'question_ids' => json_encode(['question_id_3', 'question_id_4']),
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more data as needed
        ];

        // Insert data into the 'sets' table
        foreach ($setData as $data) {
            Set::create($data);
        }
    }
}