<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Example data
        $data = [
            [
                'user_id' => 1,
                'title' => 'Sample Notification 1',
                'message' => 'This is the first notification.',
                'type' => 'info',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'title' => 'Sample Notification 2',
                'message' => 'This is the second notification.',
                'type' => 'warning',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more data as needed
        ];

        // Insert data into the 'notifications' table
        DB::table('notifications')->insert($data);
    }
}