<?php

namespace App\Http\Controllers;

use App\Action\Shop\CreateAction;
use App\Action\Shop\DestroyAction;
use App\Action\Shop\UpdateAction;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class ShopController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Request $request) {
        $message = [
            'name.required' => 'Название точки обязательно',
            'name.string' => 'Название должна быть строкой',
            'name.max' => 'Превышин лимит в 300 символов'
        ];

        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:300',
            'user_id' => 'required|integer',
            'geolocation_id' => 'required|integer'
        ], $message);

        if ($validator->fails()){
            return redirect()
                ->route('customer.shop')
                ->withErrors($validator)
                ->exceptInput();
        }

        $newShop = new CreateAction($request);
        $newShop->create();
        //TODO Андрей, настрой редирект по рутам по всем методам
        //return redirect();
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id) {
        $message = [
            'name.required' => 'Название точки обязательно',
            'name.string' => 'Название должна быть строкой',
            'name.max' => 'Превышин лимит в 300 символов'
        ];

        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:300',
            'user_id' => 'required|integer',
            'geolocation_id' => 'required|integer'
        ], $message);

        if ($validator->fails()){
            return redirect()
                ->route('customer.shop')
                ->withErrors($validator)
                ->exceptInput();
        }

        $updateShop = new UpdateAction($request, $id);
        $updateShop->update();
    }

    public function destroy($id) {
        $shop = new DestroyAction($id);
        $shop->destroy();
    }
}
