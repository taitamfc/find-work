<?php

namespace Modules\Staff\database\seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class UserCvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_cvs')->insert([
            'user_id' => 1, // Replace with your desired user_id
            'cv_file' => 'Inter', // Replace with your desired file name
            'name' => 'Admin1',
            'email' => 'Admin1@gmail.com',
            'phone' => '123456789',
            'birthdate' => '1990-01-01',
            'gender' => 'Male',
            'city' => 'Your City',
            'address' => 'Your Address',
            'outstanding_achievements' => 'Your achievements go here',
            'desired_position' => 'Desired Position',
            'desired_rank' => 'Desired Rank',
            'employment_type' => 'Full-time', // or 'Part-time', 'Contract', etc.
            'industry' => 'Your Industry',
            'desired_location' => 'Desired Location',
            'desired_salary' => '$50,000', // Replace with your desired salary format
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // You can add more records as needed.
    }
}
