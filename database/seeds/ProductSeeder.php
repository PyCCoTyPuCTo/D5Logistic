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
           'name' => 'Бодрин',
           'subcategory_id' => 1,
           'mass' => 250
        ]);

        Product::create([
            'name' => 'Белая карта',
            'subcategory_id' => 1,
            'mass' => 500
        ]);

       }
}
