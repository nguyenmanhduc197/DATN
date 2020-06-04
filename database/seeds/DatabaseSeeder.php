<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(AccountsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(OrderDetailsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(SubcribersTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(CategoriesNewsTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
    }
}
