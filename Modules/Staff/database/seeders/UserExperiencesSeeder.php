<?php

namespace Modules\Staff\database\seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class UserExperiencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Your sample data
        $experiences = [
            [
                'user_id' => 1,
                'cv_id' => 1,
                'numerical' => 1,
                'position' => 'Software Developer',
                'company' => 'ABC Corporation',
                'level' => 'Senior',
                'start_date' => '2022-01-01',
                'end_date' => '2023-01-01',
                'job_description' => 'Responsible for developing web applications.',
                'is_current' => false,
            ],
            // Add more experiences as needed
        ];

        // Insert data into the user_experiences table
        DB::table('user_experiences')->insert($experiences);
    }
}
