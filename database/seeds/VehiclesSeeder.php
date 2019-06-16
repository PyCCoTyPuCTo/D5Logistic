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
        DB::table('vehicle')->insert([
            'storage_id' => 1,
            'tonnage' => 50,
            'capacity' => 50,
            'name' => 'car1'
        ]);

        DB::table('vehicle')->insert([
            'storage_id' => 1,
            'tonnage' => 50,
            'capacity' => 50,
            'name' => 'car2'
        ]);

        DB::table('vehicle')->insert([
            'storage_id' => 1,
            'tonnage' => 50,
            'capacity' => 50,
            'name' => 'car3'
        ]);
    }
}
