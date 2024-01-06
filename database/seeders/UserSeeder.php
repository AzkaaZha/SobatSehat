<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('admin123'),
            ],
            [
                'name' => 'Kontributor',
                'email' => 'kontributor@gmail.com',
                'role' => 'kontributor',
                'password' => bcrypt('kontributor123'),
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'role' => 'user',
                'password' => bcrypt('user123'),
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
