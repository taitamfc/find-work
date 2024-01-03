<?php

namespace Modules\Staff\database\seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class UserSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Thêm seed dữ liệu cho bảng user_skills
        DB::table('user_skills')->insert([
            [
                'user_id' => 2,
                'cv_id' => 1,
                'numerical' => 1,
                'special_skill' => 'Phát triển Web',
                'skill_level' => 'Trung cấp',
                'description' => 'Kinh nghiệm với PHP, Laravel và các framework JavaScript.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'cv_id' => 2,
                'numerical' => 2,
                'special_skill' => 'Phát triển Ứng dụng Di động',
                'skill_level' => 'Nâng cao',
                'description' => 'Thạo Android và iOS app development.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'cv_id' => 3,
                'numerical' => 3,
                'special_skill' => 'Khoa học Dữ liệu',
                'skill_level' => 'Mới bắt đầu',
                'description' => 'Hiểu biết về phân tích dữ liệu và các khái niệm máy học.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
