<?php
/**
 * Created by PhpStorm.
 * User: thisi
 * Date: 15.06.2019
 * Time: 23:36
 */

namespace App\Action\Shop;


use App\Shop;

class DestroyAction
{
    private $id;

    /**
     * DestroyAction constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    public function destroy() {
        $shop = Shop::findOrFail($this->id);
        $shop->delete();
    }
}