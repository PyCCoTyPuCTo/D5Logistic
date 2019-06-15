<?php


namespace App\Action\Vehicles;

use App\Vehicle;
use Illuminate\Http\Request;

class UpdateVehicle
{
    private $data;
    private $vehicle;

    public function __construct(Request $request, $id)
    {
        $this->data = $request;
        $this->vehicle = Vehicle::find($id)->get();
    }

    public function update()
    {
        $this->vehicle->update($this->data);
    }
}