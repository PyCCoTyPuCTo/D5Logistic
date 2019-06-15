<?php


namespace App\Action\Vehicles;

use App\Vehicle;

class DestroyVehicle
{
    private $vehicle;

    public function __construct($id)
    {
        $this->vehicle = Vehicle::find($id)->first();
    }

    public function destroy()
    {
        $this->vehicle->delete();
    }

}