<?php

namespace Modules\Staff\database\seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class UserEducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Thêm seed dữ liệu cho bảng user_educations
        DB::table('user_educations')->insert([
            [
                'user_id' => 2,
                'cv_id' => 1,
                'numerical' => 1,
                'rank_id' => 1,
                'school_course' => 'Computer Science',
                'graduation_date' => '2022-06-01',
                'language' => 'English',
                'major' => 'Software Engineering',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
