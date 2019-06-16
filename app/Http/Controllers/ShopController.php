<?php

namespace App\Http\Controllers;

use App\Action\Geolocation\CreateGeoAction;
use App\Action\Shop\CreateAction;
use App\Action\Shop\DestroyAction;
use App\Action\Shop\UpdateAction;
use App\Geolocation;
use App\Shop;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Auth;
use Validator;

class ShopController extends Controller
{

    /**
     * @param Request $request
     * @return int
     */
    public function create(Request $request)
    {
        $message = [
            'name.required' => 'Название точки обязательно',
            'name.string' => 'Название должна быть строкой',
            'name.max' => 'Превышин лимит в 300 символов',
            'longitude' => 'Долгота должна быть числом',
            'latitude' => 'Ширина должна быть числом'
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:300'
//            'name' => 'required|string|max:300',
//            'longitude' => 'required|regex:/^\d+(\.\d{1,2})?$/\'',
//            'latitude' => 'required|regex:/^\d+(\.\d{1,2})?$/\''
        ], $message);
        if ($validator->fails()) {
            //TODO руты настроить
            return redirect()
                ->route('customer.addMarketPost')
                ->withErrors($validator)
                ->exceptInput();
        }
        $newData = [];
        $newGeo = new CreateGeoAction(
            $request->get('longitude'),
            $request->get('latitude'));
        $newData['name'] = $request->get('name');
        $newData['user_id'] = Auth::id();
        $newData['geolocation_id'] = $newGeo->create()->id;
        $newShop = new CreateAction($newData);
        $newShop->create();
        //TODO Андрей, настрой редирект по рутам по всем методам
        return redirect()->route('customer.addMarket');
    }

    public function getUpdatePage($id, Request $request)
    {
        /** @var Shop $shop */
        $shop = Shop::finde($id);
        if ($shop == null) {
            return redirect()->route('customer.addMarket');
        }

        $geolocation = Geolocation::finde($shop->geolocation_id);
        $coordinats = ['longitude', 'latitude'];
        return view('addStore', ['coordinats' => $coordinats, 'id' => $shop->id, 'geolocation_id' => $geolocation->id]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $message = [
            'name.required' => 'Название точки обязательно',
            'name.string' => 'Название должна быть строкой',
            'name.max' => 'Превышин лимит в 300 символов'
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:300',
            'user_id' => 'required|integer',
            'geolocation_id' => 'required|integer'
        ], $message);

        if ($validator->fails()) {
            return redirect()
                ->route('customer.shop')
                ->withErrors($validator)
                ->exceptInput();
        }

        $updateShop = new UpdateAction($request, $id);
        $updateShop->update();
    }

    public function destroy($id)
    {
        $shop = new DestroyAction($id);
        $shop->destroy();
    }
}
