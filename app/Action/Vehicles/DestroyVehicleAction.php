<?php


namespace App\Action\Vehicles;

use App\Vehicle;

class DestroyVehicleAction
{
    private $vehicle;

    public function __construct($id)
    {
        $this->vehicle = Vehicle::findOrFail($id)->get();
    }

    public function destroy()
    {
        $this->vehicle->delete();
    }

}