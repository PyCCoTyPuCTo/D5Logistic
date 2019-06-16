<?php


namespace App\Action\Sellers;

use App\User;
use Illuminate\Http\Request;


class CreateAction
{
    private $data;

    public function __construct(Request $newData)
    {
        $this->data = $newData;
    }


    public function create()
    {
        User::create($this->data->all());
    }
}