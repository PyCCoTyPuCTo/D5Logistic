<?php

use Illuminate\Database\Seeder;

class StoragesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('storage')->insert([
            'user_id' => 5,
            'geolocation_id' => 8
        ]);

        DB::table('storage')->insert([
            'user_id' => 5,
            'geolocation_id' => 1
        ]);

        DB::table('storage')->insert([
            'user_id' => 6,
            'geolocation_id' => 2
        ]);

        DB::table('storage')->insert([
            'user_id' => 6,
            'geolocation_id' => 4
        ]);
        DB::table('storage')->insert([
            'user_id' => 7,
            'geolocation_id' => 7
        ]);
        DB::table('storage')->insert([
            'user_id' => 7,
            'geolocation_id' => 4
        ]);
        DB::table('storage')->insert([
            'user_id' => 8,
            'geolocation_id' => 2
        ]);
        DB::table('storage')->insert([
            'user_id' => 8,
            'geolocation_id' => 1
        ]);
    }
}
