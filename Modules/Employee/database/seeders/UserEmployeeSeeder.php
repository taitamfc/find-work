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
                'company_name' => 'Company ABC',
                'company_website' => 'company_abc@example.com',
                'company_phone' => '123-456-7890',
                'company_address' => '123 Main St, City, Country',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
