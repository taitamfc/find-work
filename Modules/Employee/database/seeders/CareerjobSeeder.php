<?php

namespace Modules\Employee\database\seeders;

use Illuminate\Database\Seeder;
use Modules\Employee\app\Models\CareerJob;
use Illuminate\Support\Facades\DB;

class CareerjobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('career_job')->insert([
            [
                'career_id' => 1,
                'job_id' => '7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'career_id' => 2,
                'job_id' => '7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'career_id' => 3,
                'job_id' => '6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'career_id' => 3,
                'job_id' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'career_id' => 3,
                'job_id' => '4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'career_id' => 2,
                'job_id' => '4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'career_id' => 6,
                'job_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}
