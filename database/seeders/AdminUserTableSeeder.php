<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdminUser::truncate();
        $adminUsers = [
            [
                'name' => 'Shofiqul',
                'email' => 'shofique@gmail.com',
                'username' => 'shofique',
                'password' => bcrypt('24364850'),
                'role' => 1,
                'is_active' => 1,
            ],
            [
                'name' => 'Mamun',
                'email' => 'mamun@gmail.com',
                'username' => 'mamun',
                'password' => bcrypt('24364851'),
                'role' => 2,
                'is_active' => 1,
            ],
            [
                'name' => 'Rana',
                'email' => 'rana@gmail.com',
                'username' => 'rana',
                'password' => bcrypt('24364852'),
                'role' => 3,
                'is_active' => 1,
            ],
            [
                'name' => 'Kamal',
                'email' => 'kamal@gmail.com',
                'username' => 'kamal',
                'password' => bcrypt('24364853'),
                'role' => 2,
                'is_active' => 1,
            ],
            
        ];

        foreach ($adminUsers as $key => $value) {
            AdminUser::create($value);
        }
    }
}
