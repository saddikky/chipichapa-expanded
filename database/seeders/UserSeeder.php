<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Bob Smith',
                'email' => 'bob.smith@example.com',
                'isAdmin' => 0,
                'email_verified_at' => now(),
                'password' => Hash::make('password456'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Charlie Brown',
                'email' => 'charlie.brown@example.com',
                'isAdmin' => 0,
                'email_verified_at' => now(),
                'password' => Hash::make('password789'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Diana Prince',
                'email' => 'diana.prince@example.com',
                'isAdmin' => 0,
                'email_verified_at' => now(),
                'password' => Hash::make('password101'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ethan Hunt',
                'email' => 'ethan.hunt@example.com',
                'isAdmin' => 0,
                'email_verified_at' => now(),
                'password' => Hash::make('password202'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fiona Glenanne',
                'email' => 'fiona.glenanne@example.com',
                'isAdmin' => 0,
                'email_verified_at' => now(),
                'password' => Hash::make('password303'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ian Fleming',
                'email' => 'ian.fleming@example.com',
                'isAdmin' => 0,
                'email_verified_at' => now(),
                'password' => Hash::make('password404'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Julia Roberts',
                'email' => 'julia.roberts@example.com',
                'isAdmin' => 0,
                'email_verified_at' => now(),
                'password' => Hash::make('password505'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kieran O’Brien',
                'email' => 'kieran.obrien@example.com',
                'isAdmin' => 0,
                'email_verified_at' => now(),
                'password' => Hash::make('password606'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Laura Croft',
                'email' => 'laura.croft@example.com',
                'isAdmin' => 0,
                'email_verified_at' => now(),
                'password' => Hash::make('password707'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
