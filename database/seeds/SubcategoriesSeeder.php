<?php

use Illuminate\Database\Seeder;

class SubcategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategories')->insert([
            'name' => 'Подкатегория 1',
            'category_id' => 1
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Подкатегория 2',
            'category_id' => 2
        ]);
    }
}
