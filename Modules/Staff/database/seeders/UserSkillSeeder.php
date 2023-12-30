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
                'special_skill' => 'Web Development',
                'skill_level' => 'Intermediate',
                'description' => 'Experience with PHP, Laravel, and JavaScript frameworks.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
