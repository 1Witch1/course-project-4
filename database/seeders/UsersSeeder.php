<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
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
                'role_id' => 1,
            ],
            ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
