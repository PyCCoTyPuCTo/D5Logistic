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
            'name' => 'Кофе',
            'category_id' => 1
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Чай',
            'category_id' => 1
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Сыры',
            'category_id' => 1
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Мясо',
            'category_id' => 1
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Полуфабрикаты',
            'category_id' => 1
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Стулья',
            'category_id' => 2
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Столы',
            'category_id' => 2
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Кирпич',
            'category_id' => 3
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Дерево',
            'category_id' => 3
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Цемент',
            'category_id' => 3
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Песок',
            'category_id' => 3
        ]);
    }
}
