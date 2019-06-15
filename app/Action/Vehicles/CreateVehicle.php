<?php


namespace App\Action\Vehicles;

use App\Vehicle;
use Illuminate\Http\Request;

class CreateVehicle
{
    private $data;

    public function __construct(Request $request)
    {
        $this->data = $request;
    }

    public function create()
    {
        Vehicle::create($this->data->all());
    }
}