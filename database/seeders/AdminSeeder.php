<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            [
            'name' => 'shovo das',
            'email' => 'admin1@gmail.com',
            'role_id' => '1',
            'role_name' => 'admin',
            'password' => bcrypt('password'),
             ],
            ['name' => 'John Doe',
                'email' => 'admin2@gmail.com',
                'role_id' => '2',
                'role_name' => 'manager',
                'password' => bcrypt('password'),
            ],
            ['name' => 'Jane Smith',
                'email' => 'admin3@gmail.com',
                'role_id' => '3',
                'role_name' => 'approved manager',
                'password' => bcrypt('password'),
                ],
            [
                'name' => 'Jane deni',
                'email' => 'admin4@gmail.com',
                'role_id' => '4',
                'role_name' => 'request manager',
                'password' => bcrypt('password'),
                ],
        ];
        Admin::insert($admin);
    }
}
