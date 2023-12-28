<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobPackageSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobPackages = [
            ['name' => 'Tin Thường', 'status' => 1, 'description' => 'Mô tả cho Tin Thường', 'price' => 0, 'slug' => 'tin-thuong', 'image' => 'image1.jpg', 'parent_id' => 0, 'position' => 1],
            ['name' => 'Tin Vip', 'status' => 1, 'description' => 'Mô tả cho Tin Vip', 'price' => 100000, 'slug' => 'tin-vip', 'image' => 'image2.jpg', 'parent_id' => 0, 'position' => 2],
            ['name' => 'Tin Hot', 'status' => 1, 'description' => 'Mô tả cho Tin Hot', 'price' => 50000, 'slug' => 'tin-hot', 'image' => 'image3.jpg', 'parent_id' => 0, 'position' => 3],
            ['name' => 'Tin Mới Nhất', 'status' => 1, 'description' => 'Mô tả cho Tin Mới Nhất', 'price' => 200000, 'slug' => 'tin-moi-nhat', 'image' => 'image4.jpg', 'parent_id' => 0, 'position' => 4],
        ];

        foreach ($jobPackages as $jobPackage) {
            DB::table('job_packages')->insert($jobPackage);
        }
    }
}