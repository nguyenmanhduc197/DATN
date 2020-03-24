<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        \Illuminate\Support\Facades\DB::table('customers')->truncate();
        \Illuminate\Support\Facades\DB::table('customers')->insert([


            [
                'username'=>'nguyenmanhduc197',
                'password'=>hash::make('duc1234'),
                'full_name'=>'Nguyen Manh Duc',
                'gender'=>2,
                'address'=>'Hanoi',
                'email'=>'nguyenmanhduc197@gmail.com',
                'DOB'=>'1997-07-19',
                'phone'=>'0392699990',
                'role'=>2,
                'status'=>1
            ],


        ]);
    }

}