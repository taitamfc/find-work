<?php

namespace Modules\Employee\database\seeders;

use Illuminate\Database\Seeder;

class SeedTableJobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Job::create([
            'user_id' => 1,
            'name' => 'Job 1',
            'slug' => 'job-1',
            'career' => 'Career 1',
            'type_work' => 'Type 1',
            'deadline' => '2024-01-01',
            'experience' => 'Experience 1',
            'wage_min' => 1000,
            'wage_max' => 2000,
            'gender' => 1,
            'work_address' => 'Address 1',
            'degree' => 'Degree 1',
            'jobStatusId' => 'Status 1',
            'job_description' => 'Description 1',
            'job_requirements' => 'Requirements 1',
        ]);

        // Add more job records as needed
        // Job::create([...]);
        // Job::create([...]);
    }
}
