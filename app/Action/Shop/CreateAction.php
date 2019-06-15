<?php
/**
 * Created by PhpStorm.
 * User: thisi
 * Date: 15.06.2019
 * Time: 23:05
 */

namespace App\Action\Shop;


use App\Shop;

class CreateAction
{
    private $data;

    /**
     * CreateAction constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function create() {
        Shop::create($this->data);
    }
}