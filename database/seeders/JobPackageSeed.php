<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobPackageSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function up(): void
    {
        $jobPackages = [
            ['name' => 'Tin Thường', 'status' => 1, 'description' => 'Mô tả cho Tin Thường', 'price' => 0],
            ['name' => 'Tin Vip', 'status' => 1, 'description' => 'Mô tả cho Tin Vip', 'price' => 100000],
            ['name' => 'Tin Hot', 'status' => 1, 'description' => 'Mô tả cho Tin Hot', 'price' => 50000],
            ['name' => 'Tin Mới Nhất', 'status' => 1, 'description' => 'Mô tả cho Tin Mới Nhất', 'price' => 200000],
        ];

        foreach ($jobPackages as $jobPackage) {
            DB::table('job_packages')->insert($jobPackage);
        }
    }
}
