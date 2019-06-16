<?php

use Illuminate\Database\Seeder;
use App\TypeUser;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TypeUsersSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(SubcategoriesSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(GeolocationSeeder::class);
        $this->call(StoragesSeeder::class);
        $this->call(ShopSeeder::class);
        $this->call(VehiclesSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(OrdersSeeder::class);
    }
}
