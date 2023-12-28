<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function up(): void
    {
        $levels = [
            ['name' => 'Nhân viên', 'status' => 1, 'description' => 'Mô tả cho Nhân viên'],
            ['name' => 'Trưởng nhóm', 'status' => 1, 'description' => 'Mô tả cho Trưởng nhóm'],
            ['name' => 'Quản lý', 'status' => 1, 'description' => 'Mô tả cho Quản lý'],
            ['name' => 'Giám đốc', 'status' => 1, 'description' => 'Mô tả cho Giám đốc'],
            ['name' => 'Chủ tịch', 'status' => 1, 'description' => 'Mô tả cho Chủ tịch'],
        ];

        foreach ($levels as $level) {
            DB::table('levels')->insert($level);
        }
    }
}
