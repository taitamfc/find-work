<?php

namespace Modules\Staff\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();
        $names = [
            'Nguyễn Văn Quyết',
            'Phan Văn Mạnh',
            'Trần Đình Hải',
            'Nguyễn Thị Uyến Nhi',
            'Tạ Quang Tôn',
            'Võ Văn An',
            'Phan Văn Quyết',
            'Mạc Văn Hải',
        ];
    
        $datas = [];
    
        foreach ($names as $name) {
            $data = [
                'name' => $name,
                'email' => $faker->unique()->safeEmail,
                'type' => 'staff',
                'password' => Hash::make(123456),
                'created_at' => now(),
                'updated_at' => now(),
            ];
    
            $datas[] = $data;
        }
    
        // Insert the data into the database
        foreach ($datas as $data) {
            DB::table('users')->insert($data);
        }
    }
}