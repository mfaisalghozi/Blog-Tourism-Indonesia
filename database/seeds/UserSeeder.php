<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'user_satu',
            'email' => 'userSatu@gmail.com',
            'phone' => '123123123354',
            'role' => 'user',
            'password' => Hash::make('testingusersatu')
        ]);
        DB::table('users')->insert([
            'name' => 'user_dua',
            'email' => 'userDua@gmail.com',
            'phone' => '123123123313',
            'role' => 'user',
            'password' => Hash::make('testinguserdua')
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '123123123123',
            'role' => 'admin',
            'password' => Hash::make('testingadmin')
        ]);
    }
}
