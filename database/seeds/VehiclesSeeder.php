<?php

use Illuminate\Database\Seeder;

class VehiclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicles')->insert([
            'storage_id' => 1,
            'tonnage' => 500
        ]);

        DB::table('vehicles')->insert([
            'storage_id' => 2,
            'tonnage' => 250
        ]);

        DB::table('vehicles')->insert([
            'storage_id' => 3,
            'tonnage' => 100
        ]);

        DB::table('vehicles')->insert([
            'storage_id' => 4,
            'tonnage' => 50
        ]);
    }
}
