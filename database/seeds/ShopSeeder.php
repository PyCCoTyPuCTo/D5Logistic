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
            'name' => 'Тантал',
            'user_id' => 4,
            'geolocation_id' => 4
        ]);

        Shop::create([
            'name' => 'shop1',
            'user_id' => 6,
            'geolocation_id' => 5
        ]);

        Shop::create([
            'name' => 'shop1',
            'user_id' => 7,
            'geolocation_id' => 6
        ]);

        Shop::create([
            'name' => 'shop1',
            'user_id' => 8,
            'geolocation_id' => 7
        ]);
    }
}
