<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['name' => 'SuperAdmin', 'priority' => 1],
            ['name' => 'Admin', 'priority' => 2],
            ['name' => 'User', 'priority' => 0],
            ['name' => 'Editor', 'priority' => 3],
        ]);
    }
}
