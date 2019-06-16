<?php

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
        DB::table('orders')->insert([
            'shop_id' => 1,
            'storage_id' => 3,
            'date' => '2019-06-03'
        ]);

        DB::table('orders')->insert([
            'shop_id' => 2,
            'storage_id' => 3,
            'date' => '2019-06-03'
        ]);

        DB::table('orders')->insert([
            'shop_id' => 1,
            'storage_id' => 4,
            'date' => '2019-06-04'
        ]);

        DB::table('orders')->insert([
            'shop_id' => 2,
            'storage_id' => 4,
            'date' => '2019-06-04'
        ]);
    }
}
