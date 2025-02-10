<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Иван',
                'lname' => 'Иванов',
                'fname' => 'Иванович',
                'login' => 'ivanov',
                'password' => Hash::make('password'),
                'role_id' => 1,
            ],
            [
                'name' => 'Петр',
                'lname' => 'Петров',
                'fname' => 'Петрович',
                'login' => 'petrov',
                'password' => Hash::make('password'),
                'role_id' => 2,
            ],
        ]);
    }
}
