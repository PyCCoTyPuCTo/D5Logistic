<?php


namespace App\Action\Sellers;

use App\User;
use Illuminate\Http\Request;

class UpdateAction
{
    private $data;
    private $seller;

    public function __construct(Request $newData, $id)
    {
        $this->data = $newData;
        $this->seller = User::find($id)->get();
    }

    public function update()
    {
        $this->seller->update($this->data);
    }
}