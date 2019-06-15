<?php
/**
 * Created by PhpStorm.
 * User: thisi
 * Date: 15.06.2019
 * Time: 22:05
 */

namespace App\Action\Customer;


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
    }
}