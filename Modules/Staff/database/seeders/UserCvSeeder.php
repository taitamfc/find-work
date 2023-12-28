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
        $data = [
            [
                'user_id' => 1,
                'cv_file' => 'Inter',
                'name' => 'Admin1',
                'email' => 'admin1@gmail.com',
                'phone' => '123456789',
                'birthdate' => '1990-01-01',
                'gender' => 'Male',
                'city' => 'Your City',
                'address' => 'Your Address',
                'outstanding_achievements' => 'Your achievements go here',
                'desired_position' => 'Desired Position',
                'desired_rank' => 'Desired Rank',
                'employment_type' => 'Full-time',
                'industry' => 'Your Industry',
                'desired_location' => 'Desired Location',
                'desired_salary' => '$50,000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'cv_file' => 'Fresher',
                'name' => 'Admin2',
                'email' => 'admin2@gmail.com',
                'phone' => '987654321',
                'birthdate' => '1991-02-02',
                'gender' => 'Female',
                'city' => 'Another City',
                'address' => 'Another Address',
                'outstanding_achievements' => 'More achievements go here',
                'desired_position' => 'Another Desired Position',
                'desired_rank' => 'Another Desired Rank',
                'employment_type' => 'Part-time',
                'industry' => 'Another Industry',
                'desired_location' => 'Another Desired Location',
                'desired_salary' => '$60,000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'cv_file' => 'Iunior',
                'name' => 'Admin3',
                'email' => 'admin3@gmail.com',
                'phone' => '111222333',
                'birthdate' => '1992-03-03',
                'gender' => 'Other',
                'city' => 'Yet Another City',
                'address' => 'Yet Another Address',
                'outstanding_achievements' => 'Even more achievements go here',
                'desired_position' => 'Yet Another Desired Position',
                'desired_rank' => 'Yet Another Desired Rank',
                'employment_type' => 'Contract',
                'industry' => 'Yet Another Industry',
                'desired_location' => 'Yet Another Desired Location',
                'desired_salary' => '$70,000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('user_cvs')->insert($data);
    }
}
