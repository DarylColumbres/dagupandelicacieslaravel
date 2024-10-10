<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
    * Run the database seeds.
    */
    public function run(): void
    {
        if (!User::where('email', 'admin@example.com')->exists()) {
            $admin = new User();
            $admin->name = 'Admin User';
            $admin->email = 'admin@example.com';
            $admin->password = bcrypt('your_secure_password');
            $admin->role = 'admin';
            $admin->save();
        }
    }
}
