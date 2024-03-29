<?php


namespace App\Action\Vehicles;

use App\Vehicle;

class MoveToStorageAction
{
    /**
     * @var Vehicle
     */
    private $vehicle;
    private $storage_id;

    public function __construct($id, $storage)
    {
        $this->vehicle = Vehicle::findOrFail($id)->get();
        $this->storage_id = $storage;
    }

    public function move()
    {
        $this->vehicle->storage_id = $this->storage_id;
        $this->vehicle->save();
    }
}