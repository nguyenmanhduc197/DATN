 <?php

use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('accounts')->truncate();
        \Illuminate\Support\Facades\DB::table('accounts')->insert([


            [
                'username'=>'nguyenmanhduc197',
                'password'=>'duc1234',
                'full_name'=>'Nguyen Manh Duc',
                'gender'=>1,
                'address'=>'Hanoi',
                'email'=>'nguyenmanhduc197@gmail.com',
                'DOB'=>'1997-07-19',
                'phone'=>'0392699990`',
                'role'=>1
            ],

            [
                'username'=>'admin01',
                'password'=>'admin01',
                'full_name'=>'admin',
                'gender'=>1,
                'address'=>'Hanoi',
                'email'=>'admin01@gmail.com',
                'DOB'=>'1997-07-19',
                'phone'=>'0123456789`',
                'role'=>1
            ],


        ]);
    }
}