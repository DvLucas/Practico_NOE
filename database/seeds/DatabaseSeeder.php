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
        $this->call(CategoriesTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(ColorsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(RolTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
