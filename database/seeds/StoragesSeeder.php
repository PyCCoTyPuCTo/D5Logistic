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
            'user_id' => 2,
            'geolocation_id' => 1
        ]);

    }
}
