<?php
/**
 * Created by PhpStorm.
 * User: thisi
 * Date: 15.06.2019
 * Time: 23:23
 */

namespace App\Action\Shop;


use App\Shop;

class UpdateAction
{
    private $data;
    private $id;

    /**
     * UpdateAction constructor.
     * @param $data
     */
    public function __construct($data, $id)
    {
        $this->data = $data;
        $this->id = $id;
    }

    public function update() {
        $shop = Shop::find($this->id);
        $shop->update($this->data);
    }
}