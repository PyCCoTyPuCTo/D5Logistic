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
            'tonnage' => 1200,
            'capacity' => 50,
            'name' => 'VW Transporter'
        ]);

        DB::table('vehicle')->insert([
            'storage_id' => 1,
            'tonnage' => 1500,
            'capacity' => 50,
            'name' => 'MB Sprinter'
        ]);

        DB::table('vehicle')->insert([
            'storage_id' => 1,
            'tonnage' => 1500,
            'capacity' => 50,
            'name' => 'MB Sprinter'
        ]);
    }
}
