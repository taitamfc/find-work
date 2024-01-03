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
                'user_id' => 2,
                'cv_id' => 1,
                'numerical' => 1,
                'position' => 'Nhà phát triển phần mềm',
                'company' => 'Tập đoàn ABC',
                'rank_id' => 1,
                'start_date' => '2022-01-01',
                'end_date' => '2023-01-01',
                'job_description' => 'Trách nhiệm phát triển ứng dụng web.',
                'is_current' => false,
            ],
            [
                'user_id' => 2,
                'cv_id' => 2,
                'numerical' => 2,
                'position' => 'Kỹ sư mạng',
                'company' => 'Công ty XYZ Tech',
                'rank_id' => 1,
                'start_date' => '2021-05-01',
                'end_date' => '2022-08-01',
                'job_description' => 'Triển khai và duy trì các mạng của công ty.',
                'is_current' => false,
            ],
            [
                'user_id' => 2,
                'cv_id' => 3,
                'numerical' => 3,
                'position' => 'Chuyên viên phân tích dữ liệu',
                'company' => 'Công ty Data Insights',
                'rank_id' => 1,
                'start_date' => '2023-03-01',
                'end_date' => '2024-03-01',
                'job_description' => 'Phân tích và diễn giải các tập dữ liệu phức tạp.',
                'is_current' => false,
            ],
            // Add more experiences as needed
        ];

        // Insert data into the user_experiences table
        DB::table('user_experiences')->insert($experiences);
    }
}
