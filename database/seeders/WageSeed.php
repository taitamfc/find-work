<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class WageSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function up(): void
    {
        $wages = [
            ['name' => '5 triệu', 'status' => 1, 'description' => 'Mô tả cho mức lương 5 triệu'],
            ['name' => '10 triệu', 'status' => 1, 'description' => 'Mô tả cho mức lương 10 triệu'],
            ['name' => '15 triệu', 'status' => 1, 'description' => 'Mô tả cho mức lương 15 triệu'],
            ['name' => '20 triệu', 'status' => 1, 'description' => 'Mô tả cho mức lương 20 triệu'],
            ['name' => '25 triệu', 'status' => 1, 'description' => 'Mô tả cho mức lương 25 triệu'],
        ];

        foreach ($wages as $wage) {
            DB::table('wages')->insert($wage);
        }
    }
}
