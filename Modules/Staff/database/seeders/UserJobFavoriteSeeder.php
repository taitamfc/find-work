<?php

namespace Modules\Staff\database\seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class UserJobFavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     DB::table('user_job_favorites')->insert([
    //         'user_id' => 1, 
    //         'job_id' => 1,
    //         'created_at' => now(),
    //         'updated_at' => now(),
    //     ]);
    // }
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {
            DB::table('user_job_favorites')->insert([
                'user_id' => $i,
                'job_id' => $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}