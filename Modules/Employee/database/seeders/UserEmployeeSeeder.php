<?php

namespace Modules\Employee\database\seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;
use Modules\Employee\app\Models\UserEmployee;


class UserEmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_employee')->insert([
            [
                'user_id' => 1,
                'name' => 'Công ty Đại Hà',
                'website' => 'cong_ty_abc@example.com',
                'phone' => '123-456-7890',
                'address' => '123 Đường Chính, Thành phố, Quốc gia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'name' => 'Công ty Thanh Bắc',
                'website' => 'cong_ty_xyz@example.com',
                'phone' => '987-654-3210',
                'address' => '456 Đường Phụ, Thành phố, Quốc gia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'name' => 'Công ty Hoa Kỳ',
                'website' => 'cong_ty_mno@example.com',
                'phone' => '555-555-5555',
                'address' => '789 Đường Bổ sung, Thành phố, Quốc gia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'name' => 'Công ty Đại Phát',
                'website' => 'cong_ty_pqr@example.com',
                'phone' => '111-222-3333',
                'address' => '999 Đường Chính, Thành phố, Quốc gia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'name' => 'Công ty GHI',
                'website' => 'cong_ty_ghi@example.com',
                'phone' => '444-444-4444',
                'address' => '222 Đường Gốc, Thành phố, Quốc gia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
