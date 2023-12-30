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
        // DB::table('users')->truncate();
        // Thêm dữ liệu mới

        $data = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'type' => 'employee',
                'status' => 1,
                'password' => Hash::make(123456),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'admin2',
                'email' => 'admin2@gmail.com',
                'type' => 'staff',
                'status' => 1,
                'password' => Hash::make(123456),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];
        
        DB::table('users')->insert();
    }
}
