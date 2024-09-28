<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'name' => 'Admin',
            ],
            [
                'name' => 'User',
            ],
        ]);
        DB::table('users')->insert([
            
            [
                'name' => 'admin',
                'role' => '1',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'user',
                'role' => '2',
                'email' => 'user@gmail.com',
                'password' => Hash::make('password'),
            ],
        ]);
    }
}
