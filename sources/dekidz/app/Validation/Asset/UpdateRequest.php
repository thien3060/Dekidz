<?php

namespace App\Validation\Asset;

use App\Validation\Validator;

class UpdateRequest extends Validator
{
    public function rules()
    {
        return [
            'name' => 'required|min:1',
            'quantity' => 'required',
            'unit'=> 'required',
        ];
    }
}
