<?php

namespace App\Http\Controllers;

use App\Action\Vehicles\CreateVehicle;
use App\Action\Vehicles\DestroyVehicle;
use App\Action\Vehicles\MoveToStorage;
use App\Action\Vehicles\UpdateVehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function create(Request $request) {
        $createVehicle = new CreateVehicle($request);
        $createVehicle->create();
    }

    public function update(Request $request) {
        $updateVehicle = new UpdateVehicle($request);
        $updateVehicle->update();
    }

    public function destroy($id) {
        $destroyVehicle = new DestroyVehicle($id);
        $destroyVehicle->destroy();
    }

    public function moveToStorage($idVehicle, $idStorage) {
        $moveVehicle = new MoveToStorage($idVehicle, $idStorage);
        $moveVehicle->move();
    }
}
