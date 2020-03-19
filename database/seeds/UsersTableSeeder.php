<?php

use Illuminate\Database\Seeder;
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
        \Illuminate\Support\Facades\DB::table('users')->truncate();
        \Illuminate\Support\Facades\DB::table('users')->insert([


            [
                'username'=>'nguyenmanhduc197',
                'password'=>hash::make('duc1234'),
                'full_name'=>'Nguyen Manh Duc',
                'gender'=>1,
                'address'=>'Hanoi',
                'email'=>'nguyenmanhduc197@gmail.com',
                'DOB'=>'1997-07-19',
                'phone'=>'0392699990',
                'role'=>1,
                'status'=>1
            ],

            [
                'username'=>'admin01',
                'password'=>hash::make('admin01'),
                'full_name'=>'admin',
                'gender'=>1,
                'address'=>'Hanoi',
                'email'=>'admin01@gmail.com',
                'DOB'=>'1997-07-19',
                'phone'=>'0123456789',
                'role'=>1,
                'status'=>1
            ],

        ]);
    }
}
