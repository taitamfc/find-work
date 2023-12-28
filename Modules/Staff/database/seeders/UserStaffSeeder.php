<?php

namespace Modules\Staff\database\seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class UserStaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('user_staff')->truncate();
        DB::table('user_staff')->insert([
            'user_id' => 1, 
            'phone' => '123456789',
            'birthdate' => '2002-01-01',
            'experience_years' => 3,
            'gender' => 'Nữ',
            'city' => 'QT',
            'address' => 'Linh Chiểu',
            'outstanding_achievements' => 'no',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
