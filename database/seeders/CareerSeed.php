<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CareerSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function up(): void
    {
        $careers = [
            ['name' => 'Kỹ sư phần mềm', 'status' => 1, 'description' => 'Mô tả cho kỹ sư phần mềm'],
            ['name' => 'Quản lý dự án', 'status' => 1, 'description' => 'Mô tả cho quản lý dự án'],
            ['name' => 'Lập trình viên', 'status' => 1, 'description' => 'Mô tả cho lập trình viên'],
            ['name' => 'Thiết kế đồ họa', 'status' => 1, 'description' => 'Mô tả cho thiết kế đồ họa'],
            ['name' => 'Kế toán', 'status' => 1, 'description' => 'Mô tả cho kế toán'],
            ['name' => 'Nhân viên bán hàng', 'status' => 1, 'description' => 'Mô tả cho nhân viên bán hàng'],
            ['name' => 'Marketing', 'status' => 1, 'description' => 'Mô tả cho marketing'],
            ['name' => 'Quản trị mạng', 'status' => 1, 'description' => 'Mô tả cho quản trị mạng'],
            ['name' => 'Nhân viên văn phòng', 'status' => 1, 'description' => 'Mô tả cho nhân viên văn phòng'],
            ['name' => 'Giáo viên', 'status' => 1, 'description' => 'Mô tả cho giáo viên'],
        ];

        foreach ($careers as $career) {
            DB::table('careers')->insert($career);
        }
    }
}
