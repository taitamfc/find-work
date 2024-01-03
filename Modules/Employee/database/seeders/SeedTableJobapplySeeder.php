<?php

namespace Modules\Employee\database\seeders;

use Illuminate\Database\Seeder;
use Modules\Employee\app\Models\UserJobApply;


class SeedTableJobapplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        UserJobApply::create([
            'cv_id' => 1,
            'user_id' => 2,
            'job_id' => 1,
            'status' => 0,
        ]);

    }
}
