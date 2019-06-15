<?php
/**
 * Created by PhpStorm.
 * User: thisi
 * Date: 16.06.2019
 * Time: 0:30
 */

namespace App\Action\Geolocation;


use App\Geolocation;

class CreateGeoAction
{
    private $longitude;
    private $latitude;

    /**
     * CreateGeoAction constructor.
     * @param $longitude
     * @param $latitude
     */
    public function __construct($longitude, $latitude)
    {
        $this->longitude = $longitude;
        $this->latitude = $latitude;
    }

    public function create() {
        return Geolocation::create([
           'longitude' => $this->longitude,
           'latitude' => $this->latitude
        ]);
    }
}