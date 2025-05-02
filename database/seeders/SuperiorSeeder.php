<?php

namespace Database\Seeders;

use App\Models\Superior;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuperiorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Superior::create([
            'user_id' => 1,
            'first_name' => 'Superior',
            'last_name' => 'Rizal',
            'date_of_birth' => '01-01-1999',
            'gender' => 0,
            'address' => 'Jl. Raya No. 1 lorem ipsum dolor sit amet',
            'phone_number' => '081234567890'
        ]);
    }
}
