<?php

namespace Modules\Employee\database\seeders;

use Illuminate\Database\Seeder;
use Modules\Employee\app\Models\Job;


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
            'wage' => 2000,
            'gender' => 1,
            'work_address' => 'Address 1',
            'degree' => 'Degree 1',
            'status' => 1,
            'description' => 'Description 1',
            'requirements' => 'Requirements 1',
        ]);

        Job::create([
            'user_id' => 1,
            'name' => 'Công việc 1',
            'slug' => 'cong-viec-1',
            'career' => 'Ngành nghề 1',
            'type_work' => 1,
            'deadline' => '2024-01-01',
            'experience' => 'Kinh nghiệm 1',
            'wage' => 200,
            'gender' => 1,
            'work_address' => 'Địa chỉ 1',
            'degree' => 'Bằng cấp 1',
            'status' => 1,
            'description' => 'Mô tả công việc 1',
            'requirements' => 'Yêu cầu công việc 1',
        ]);

        Job::create([
            'user_id' => 1,
            'name' => 'Công việc 2',
            'slug' => 'cong-viec-2',
            'career' => 'Ngành nghề 2',
            'type_work' => 0,
            'deadline' => '2024-01-01',
            'experience' => 'Kinh nghiệm 2',
            'wage' => 200,
            'gender' => 1,
            'work_address' => 'Địa chỉ 2',
            'degree' => 'Bằng cấp 2',
            'status' => 1,
            'description' => 'Mô tả công việc 2',
            'requirements' => 'Yêu cầu công việc 2',
        ]);

        Job::create([
            'user_id' => 1,
            'name' => 'Công việc 3',
            'slug' => 'cong-viec-2',
            'career' => 'Ngành nghề 2',
            'type_work' => 0,
            'deadline' => '2024-01-01',
            'experience' => 'Kinh nghiệm 2',
            'wage' => 200,
            'gender' => 1,
            'work_address' => 'Địa chỉ 2',
            'degree' => 'Bằng cấp 2',
            'status' => 1,
            'description' => 'Mô tả công việc 2',
            'requirements' => 'Yêu cầu công việc 2',
        ]);

        Job::create([
            'user_id' => 1,
            'name' => 'Công việc 4',
            'slug' => 'cong-viec-2',
            'career' => 'Ngành nghề 2',
            'type_work' => 0,
            'deadline' => '2024-01-01',
            'experience' => 'Kinh nghiệm 2',
            'wage' => 200,
            'gender' => 1,
            'work_address' => 'Địa chỉ 2',
            'degree' => 'Bằng cấp 2',
            'status' => 1,
            'description' => 'Mô tả công việc 2',
            'requirements' => 'Yêu cầu công việc 2',
        ]);

        Job::create([
            'user_id' => 1,
            'name' => 'Công việc 5',
            'slug' => 'cong-viec-2',
            'career' => 'Ngành nghề 2',
            'type_work' => 0,
            'deadline' => '2024-01-01',
            'experience' => 'Kinh nghiệm 2',
            'wage' => 200,
            'gender' => 1,
            'work_address' => 'Địa chỉ 2',
            'degree' => 'Bằng cấp 2',
            'status' => 1,
            'description' => 'Mô tả công việc 2',
            'requirements' => 'Yêu cầu công việc 2',
        ]);

        Job::create([
            'user_id' => 1,
            'name' => 'Công việc 6',
            'slug' => 'cong-viec-2',
            'career' => 'Ngành nghề 2',
            'type_work' => 0,
            'deadline' => '2024-01-01',
            'experience' => 'Kinh nghiệm 2',
            'wage' => 200,
            'gender' => 1,
            'work_address' => 'Địa chỉ 2',
            'degree' => 'Bằng cấp 2',
            'status' => 1,
            'description' => 'Mô tả công việc 2',
            'requirements' => 'Yêu cầu công việc 2',
        ]);

        Job::create([
            'user_id' => 1,
            'name' => 'Công việc 7',
            'slug' => 'cong-viec-2',
            'career' => 'Ngành nghề 2',
            'type_work' => 0,
            'deadline' => '2024-01-01',
            'experience' => 'Kinh nghiệm 2',
            'wage' => 200,
            'gender' => 1,
            'work_address' => 'Địa chỉ 2',
            'degree' => 'Bằng cấp 2',
            'status' => 1,
            'description' => 'Mô tả công việc 2',
            'requirements' => 'Yêu cầu công việc 2',
        ]);

        Job::create([
            'user_id' => 1,
            'name' => 'Công việc 8',
            'slug' => 'cong-viec-2',
            'career' => 'Ngành nghề 2',
            'type_work' => 0,
            'deadline' => '2024-01-01',
            'experience' => 'Kinh nghiệm 2',
            'wage' => 200,
            'gender' => 1,
            'work_address' => 'Địa chỉ 2',
            'degree' => 'Bằng cấp 2',
            'status' => 1,
            'description' => 'Mô tả công việc 2',
            'requirements' => 'Yêu cầu công việc 2',
        ]);

        Job::create([
            'user_id' => 1,
            'name' => 'Công việc 9',
            'slug' => 'cong-viec-2',
            'career' => 'Ngành nghề 2',
            'type_work' => 0,
            'deadline' => '2024-01-01',
            'experience' => 'Kinh nghiệm 2',
            'wage' => 200,
            'gender' => 1,
            'work_address' => 'Địa chỉ 2',
            'degree' => 'Bằng cấp 2',
            'status' => 1,
            'description' => 'Mô tả công việc 2',
            'requirements' => 'Yêu cầu công việc 2',
        ]);

        Job::create([
            'user_id' => 1,
            'name' => 'Công việc 10',
            'slug' => 'cong-viec-2',
            'career' => 'Ngành nghề 2',
            'type_work' => 0,
            'deadline' => '2024-01-01',
            'experience' => 'Kinh nghiệm 2',
            'wage' => 200,
            'gender' => 1,
            'work_address' => 'Địa chỉ 2',
            'degree' => 'Bằng cấp 2',
            'status' => 1,
            'description' => 'Mô tả công việc 2',
            'requirements' => 'Yêu cầu công việc 2',
        ]);

        Job::create([
            'user_id' => 1,
            'name' => 'Công việc 11',
            'slug' => 'cong-viec-2',
            'career' => 'Ngành nghề 2',
            'type_work' => 0,
            'deadline' => '2024-01-01',
            'experience' => 'Kinh nghiệm 2',
            'wage' => 200,
            'gender' => 1,
            'work_address' => 'Địa chỉ 2',
            'degree' => 'Bằng cấp 2',
            'status' => 1,
            'description' => 'Mô tả công việc 2',
            'requirements' => 'Yêu cầu công việc 2',
        ]);
        // Add more job records as needed
        // Job::create([...]);
        // Job::create([...]);
    }
}