<?php

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
        DB::table('shop')->insert([
            'name' => 'Магазин 1',
            'user_id' => 2,
            'geolocation_id' => 1
        ]);

        DB::table('shop')->insert([
            'name' => 'Магазин 2',
            'user_id' => 2,
            'geolocation_id' => 1
        ]);
    }
}
