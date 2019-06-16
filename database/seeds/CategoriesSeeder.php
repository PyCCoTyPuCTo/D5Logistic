<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Продукты питания'
        ]);

        DB::table('categories')->insert([
            'name' => 'Мебель'
        ]);

        DB::table('categories')->insert([
            'name' => 'Стройматериалы'
        ]);
    }
}
