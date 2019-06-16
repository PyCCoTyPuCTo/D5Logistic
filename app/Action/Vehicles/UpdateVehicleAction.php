<?php


namespace App\Action\Vehicles;

use App\Vehicle;
use Illuminate\Http\Request;

class UpdateVehicleAction
{
    private $data;
    private $vehicle;

    public function __construct(Request $request)
    {
        $this->data = $request;
        $this->vehicle = Vehicle::findOrFail($request->get('id'))->get();
    }

    public function update()
    {
        $this->vehicle->update($this->data->all());
    }
}