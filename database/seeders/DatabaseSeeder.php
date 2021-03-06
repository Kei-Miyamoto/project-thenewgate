<?php

namespace Database\Seeders;

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
      $this->call(CompaniesTableSeeder::class);
      $this->call(FavoritesTableSeeder::class);
      $this->call(NewsListsTableSeeder::class);
      $this->call(UsersTableSeeder::class);
      $this->call(AdminsTableSeeder::class);
      $this->call(ProductDetailsTableSeeder::class);
      $this->call(ProductsTableSeeder::class);
    }
}
