<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
           'name' => 'товар 1',
           'subcategory_id' => 1,
           'mass' => 50
        ]);

        Product::create([
            'name' => 'товар 2',
            'subcategory_id' => 1,
            'mass' => 10
        ]);

        Product::create([
            'name' => 'товар 3',
            'subcategory_id' => 1,
            'mass' => 40
        ]);

        Product::create([
            'name' => 'товар 4',
            'subcategory_id' => 1,
            'mass' => 40
        ]);
    }
}
