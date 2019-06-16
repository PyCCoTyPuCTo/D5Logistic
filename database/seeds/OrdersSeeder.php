<?php

use App\Order;
use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'shop_id' => 1,
            'storage_id' => 1,
            'date' => '2019-06-20'
        ]);

        Order::create([
            'shop_id' => 2,
            'storage_id' => 1,
            'date' => '2019-06-20'
        ]);

        Order::create([
            'shop_id' => 1,
            'storage_id' => 1,
            'date' => '2019-06-20'
        ]);

        Order::create([
            'shop_id' => 2,
            'storage_id' => 1,
            'date' => '2019-06-04'
        ]);
    }
}
