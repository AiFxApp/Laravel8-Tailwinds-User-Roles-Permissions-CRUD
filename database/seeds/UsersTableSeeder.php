<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'AIFX-Admin',
                'email'          => 'ai.fx.intel@gmail.com',
                'password'       => bcrypt('Admin@2022'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
