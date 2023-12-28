<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RankSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function up(): void
    {
        $ranks = [
            ['name' => 'Trung học', 'status' => 1, 'description' => 'Mô tả cho Trung học'],
            ['name' => 'Cao đẳng', 'status' => 1, 'description' => 'Mô tả cho Cao đẳng'],
            ['name' => 'Đại học', 'status' => 1, 'description' => 'Mô tả cho Đại học'],
            ['name' => 'Thạc sĩ', 'status' => 1, 'description' => 'Mô tả cho Thạc sĩ'],
            ['name' => 'Tiến sĩ', 'status' => 1, 'description' => 'Mô tả cho Tiến sĩ'],
        ];

        foreach ($ranks as $rank) {
            DB::table('ranks')->insert($rank);
        }
    }
}
