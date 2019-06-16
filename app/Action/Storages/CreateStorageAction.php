<?php


namespace App\Action\Storages;

use App\Storage;
use Illuminate\Http\Request;
use App\Action\Geolocation\UpdateGeoAction;
use App\Action\Geolocation\CreateGeoAction;

class CreateStorageAction
{
    private $data;

    public function __construct(Request $newData)
    {
        $this->data = $newData;
    }

    public function create()
    {
        $requestData = $this->data->all();

        $newGeo = new CreateGeoAction(
            $requestData['longitude'],
            $requestData['latitude']);

        $requestData['geolocation_id'] = $newGeo->create()->id;
        Storage::create($requestData);
    }
}