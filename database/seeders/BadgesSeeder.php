<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BadgesSeeder extends Seeder
{
    public function run()
    {
        $badges = [
            [
                'badge_title' => 'Bronze Badge',
                'badge_picture' => 'bronze.png',
                'user_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'badge_title' => 'Silver Badge',
                'badge_picture' => 'silver.png',
                'user_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Add more badge records as needed
        ];

        // Insert the data into the badges table
        DB::table('badges')->insert($badges);
    }
}