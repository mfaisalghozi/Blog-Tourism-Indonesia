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
            'name' => 'user_tiga',
            'email' => 'userTiga@gmail.com',
            'phone' => '123123123699',
            'role' => 'user',
            'password' => Hash::make('testingusertiga')
        ]);
        DB::table('users')->insert([
            'name' => 'user_empat',
            'email' => 'userEmpat@gmail.com',
            'phone' => '123123124299',
            'role' => 'user',
            'password' => Hash::make('testinguserempat')
        ]);
        DB::table('users')->insert([
            'name' => 'user_lima',
            'email' => 'userLima@gmail.com',
            'phone' => '123773123699',
            'role' => 'user',
            'password' => Hash::make('testinguserlima')
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '123123123123',
            'role' => 'admin',
            'password' => Hash::make('testingadmin')
        ]);
        DB::table('users')->insert([
            'name' => 'adminDua',
            'email' => 'adminDua@gmail.com',
            'phone' => '123123123999',
            'role' => 'admin',
            'password' => Hash::make('testingadmindua')
        ]);
    }
}

