<?php

namespace App\Http\Controllers;

use App\Action\Vehicles\CreateVehicleAction;
use App\Action\Vehicles\DestroyVehicleAction;
use App\Action\Vehicles\MoveToStorageAction;
use App\Action\Vehicles\UpdateVehicleAction;
use App\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VehicleController extends Controller
{
    public function vehicles(Request $request)
    {
        $userId = Auth::id();

        $vehicles = Vehicle::all()->where('storage_id', $request['storage_id'])->where('user_id', $userId);

        return view('', ['']);
    }
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
