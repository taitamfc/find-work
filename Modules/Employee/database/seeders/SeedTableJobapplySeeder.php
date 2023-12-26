<?php

namespace Modules\Employee\database\seeders;

use Illuminate\Database\Seeder;
use Modules\Employee\app\Models\JobapplicationModel;


class SeedTableJobapplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        JobapplicationModel::create([
            'cv_id' => 1,
            'job_id' => 1,
            'status' => 0,
        ]);

        // Add more job application records as needed
        // JobApplication::create([...]);
        // JobApplication::create([...]);
    }
}
