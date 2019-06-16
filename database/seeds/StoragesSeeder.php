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
            'user_id' => 1,
            'geolocation_id' => 1
        ]);

        DB::table('storage')->insert([
            'user_id' => 1,
            'geolocation_id' => 2
        ]);

        DB::table('storage')->insert([
            'user_id' => 1,
            'geolocation_id' => 3
        ]);

        DB::table('storage')->insert([
            'user_id' => 1,
            'geolocation_id' => 4
        ]);
    }
}
