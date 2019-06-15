<?php


namespace App\Action\Products;

use Illuminate\Http\Request;
use App\Products;

class CreateAction
{
    private $data;

    public function __construct(Request $newData)
    {
        $this->data = $newData;
    }

    public function create()
    {
        // TODO
        Products::created($this->data);
    }
}