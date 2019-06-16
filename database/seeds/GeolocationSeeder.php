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

        Geolocation::create([
            'longitude' => 59.37378,
            'latitude' => 57.34554
        ]);

        Geolocation::create([
            'longitude' => 54.37378,
            'latitude' => 76.34554
        ]);

        Geolocation::create([
            'longitude' => 34.37378,
            'latitude' => 63.34554
        ]);

        Geolocation::create([
            'longitude' => 98.37378,
            'latitude' => 23.34554
        ]);
    }
}
