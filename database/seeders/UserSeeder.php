<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Xoá dữ liệu cũ trong bảng users (nếu có)
        DB::table('users')->truncate();
        // Thêm dữ liệu mới
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make(123456),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
