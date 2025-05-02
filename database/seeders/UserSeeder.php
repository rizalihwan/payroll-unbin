<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $data = [
            [
                'nip' => 'SP001',
                'email' => 'superior@gmail.com',
                'password' => Hash::make('password'),
                'role' => 0
            ],
            [
                'nip' => 'EMP001',
                'email' => 'rizalihwan94@gmail.com',
                'password' => Hash::make('password'),
                'role' => 1
            ]
        ];

        foreach ($data as $data) {
            User::updateOrCreate([
                'nip' => $data['nip'],
                'email' => $data['email'],
                'password' => $data['password'],
                'role' => $data['role']
            ], $data);
        }
    }
}
