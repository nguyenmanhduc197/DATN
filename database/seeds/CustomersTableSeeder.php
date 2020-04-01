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
                'full_name'=>'Nguyễn Mạnh Đức',
                'gender'=>2,
                'address'=>'266 Nguyễn Văn Cừ, Hà Nội',
                'avatar'=>'',
                'email'=>'nguyenmanhduc197@gmail.com',
                'DOB'=>'1997-07-19',
                'phone'=>'0392699990',
                'role'=>2,
                'status'=>1,
                'created_at'=>\Carbon\Carbon::create(2020, 3, 1, 00, 00, 00),
                'updated_at'=>\Carbon\Carbon::create(2020, 3, 1, 00, 00, 00)
            ],


        ]);
    }

}