<?php
/**
 * Created by PhpStorm.
 * User: thisi
 * Date: 16.06.2019
 * Time: 8:16
 */

namespace App\Action\Geolocation;

use App\Geolocation;

class UpdateGeoAction
{
    private $longitude;
    private $latitude;
    private $data;

    /**
     * UpdateGeoAction constructor.
     * @param $longitude
     * @param $latitude
     * @param $id
     */
    public function __construct($longitude, $latitude, $id)
    {
        $this->longitude = $longitude;
        $this->latitude = $latitude;
        $this->data = Geolocation::findOrFail($id);
    }

    public function update() {
        return $this->data->update([
            'longitude' => $this->longitude,
            'latitude' => $this->latitude
        ]);
    }
}