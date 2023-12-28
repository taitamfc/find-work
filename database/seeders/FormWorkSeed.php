<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormWorkSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function up(): void
    {
        $formWorks = [
            ['name' => 'Hợp Đồng', 'status' => 1, 'description' => 'Mô tả cho Hợp Đồng'],
            ['name' => 'Chính Thức', 'status' => 1, 'description' => 'Mô tả cho Chính Thức'],
            ['name' => 'Thực Tập', 'status' => 1, 'description' => 'Mô tả cho Thực Tập'],
        ];

        foreach ($formWorks as $formWork) {
            DB::table('form_works')->insert($formWork);
        }
    }
}
