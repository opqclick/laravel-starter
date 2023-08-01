<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'user_type' => 'administrator',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'permissions' => 'create,retrieve,update,delete',
        ]);
        DB::table('users')->insert([
            'user_type' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('123456'),
            'permissions' => 'create,retrieve,update',
        ]);
    }
}
