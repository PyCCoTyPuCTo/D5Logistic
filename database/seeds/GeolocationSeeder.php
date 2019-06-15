<?php

use App\Geolocation;
use Illuminate\Database\Seeder;

class GeolocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Geolocation::create([
            'longitude' => 45.37378,
            'latitude' => 54.34554
        ]);

        Geolocation::create([
            'longitude' => 46.37378,
            'latitude' => 34.34554
        ]);

        Geolocation::create([
            'longitude' => 35.37378,
            'latitude' => 58.34554
        ]);

        Geolocation::create([
            'longitude' => 55.37378,
            'latitude' => 55.34554
        ]);
    }
}
