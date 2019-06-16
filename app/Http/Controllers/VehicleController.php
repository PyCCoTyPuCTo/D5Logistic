<?php

namespace App\Http\Controllers;

use App\Action\Vehicles\CreateVehicleAction;
use App\Action\Vehicles\DestroyVehicleAction;
use App\Action\Vehicles\MoveToStorageAction;
use App\Action\Vehicles\UpdateVehicleAction;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function create(Request $request) {
        $createVehicle = new CreateVehicleAction($request);
        $createVehicle->create();
    }

    public function update(Request $request) {
        $updateVehicle = new UpdateVehicleAction($request);
        $updateVehicle->update();
    }

    public function destroy($id) {
        $destroyVehicle = new DestroyVehicleAction($id);
        $destroyVehicle->destroy();
    }

    public function moveToStorage($idVehicle, $idStorage) {
        $moveVehicle = new MoveToStorageAction($idVehicle, $idStorage);
        $moveVehicle->move();
    }
}
