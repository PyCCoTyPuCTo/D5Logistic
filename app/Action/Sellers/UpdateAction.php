<?php


namespace App\Action\Sellers;

use App\User;
use Illuminate\Http\Request;

class UpdateAction
{
    private $data;
    /**
     * @var User
     */
    private $seller;

    public function __construct(Request $newData, $id)
    {
        $this->data = $newData;
        $this->seller = User::find($id)->first();
    }

    public function update()
    {
        $this->seller->fill($this->data->all());
        $this->seller->save();
    }
}