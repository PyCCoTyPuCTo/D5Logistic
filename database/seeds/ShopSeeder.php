<?php

use App\Shop;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shop::create([
            'name' => 'shop1',
            'user_id' => 1,
            'geolocation_id' => 2
        ]);

        Shop::create([
            'name' => 'shop1',
            'user_id' => 3,
            'geolocation_id' => 3
        ]);
    }
}
