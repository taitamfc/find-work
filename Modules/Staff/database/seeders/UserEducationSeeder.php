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
                'school_course' => 'Khoa học máy tính',
                'graduation_date' => '2022-06-01',
                'language' => 'Anh',
                'major' => 'Kỹ thuật phần mềm',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'cv_id' => 2,
                'numerical' => 2,
                'rank_id' => 1,
                'school_course' => 'Kỹ thuật điện',
                'graduation_date' => '2021-12-01',
                'language' => 'Nhật',
                'major' => 'Hệ thống điện',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'cv_id' => 3,
                'numerical' => 3,
                'rank_id' => 1,
                'school_course' => 'Khoa học dữ liệu',
                'graduation_date' => '2023-05-01',
                'language' => 'Pháp',
                'major' => 'Phân tích dữ liệu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
