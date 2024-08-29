<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;

class AppointmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('appointment')->insert([
            [
                'user_id' => 10,
                'title' => 'Network Setup',
                'service' => 'IT Support',
                'message' => 'Assistance needed with setting up the network.',
                'status' => 'Waiting',
                'created_at' => now()->subDays(10),
                'updated_at' => now()->subDays(9),
            ],
            [
                'user_id' => 12,
                'title' => 'Software Installation',
                'service' => 'Software Development',
                'message' => 'Need help with installing new software on my system.',
                'status' => 'Accepted',
                'created_at' => now()->subDays(5),
                'updated_at' => now()->subDays(4),
            ],
            [
                'user_id' => 8,
                'title' => 'Database Migration',
                'service' => 'Data Management',
                'message' => 'Assist with migrating databases to a new server.',
                'status' => 'Denied',
                'created_at' => now()->subDays(7),
                'updated_at' => now()->subDays(6),
            ],
            [
                'user_id' => 7,
                'title' => 'Website Optimization',
                'service' => 'Web Development',
                'message' => 'Optimize the performance of our company website.',
                'status' => 'Waiting',
                'created_at' => now()->subDays(3),
                'updated_at' => now()->subDays(2),
            ],
            [
                'user_id' => 5,
                'title' => 'Security Audit',
                'service' => 'Network Security',
                'message' => 'Conduct a thorough security audit of our systems.',
                'status' => 'Accepted',
                'created_at' => now()->subDays(1),
                'updated_at' => now()->subHours(12),
            ],
            [
                'user_id' => 9,
                'title' => 'Training Session',
                'service' => 'IT Consulting',
                'message' => 'Training session on the new software for staff.',
                'status' => 'Waiting',
                'created_at' => now()->subDays(8),
                'updated_at' => now()->subDays(7),
            ],
        ]);
    }
}
