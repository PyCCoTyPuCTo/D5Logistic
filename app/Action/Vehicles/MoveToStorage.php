<?php


namespace App\Action\Vehicles;

use App\Vehicle;

class MoveToStorage
{
    /**
     * @var Vehicle
     */
    private $vehicle;
    private $storage_id;

    public function __construct($id, $storage)
    {
        $this->vehicle = Vehicle::find($id)->first();
        $this->storage_id = $storage;
    }

    public function move()
    {
        $this->vehicle->storage_id = $this->storage_id;
        $this->vehicle->save();
    }
}