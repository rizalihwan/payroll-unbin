<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create([
            'user_id' => 2,
            'department_id' => 1,
            'first_name' => 'Employee',
            'last_name' => 'Rizal Ihwan',
            'date_of_birth' => '01-01-2002',
            'gender' => 0,
            'address' => 'Jl. Raya No. 1 lorem ipsum dolor sit amet',
            'phone_number' => '081234567890',
            'office_position' => 'Web Developer',
            'joining_date' => '01-01-2020',
            'merital_status' => 0,
            'employment_type' => 0,
            'bank_name' => 'Bank BCA',
            'bank_account_number' => '1234567890'
        ]);
    }
}
