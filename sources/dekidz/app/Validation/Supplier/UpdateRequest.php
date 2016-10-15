<?php

namespace App\Validation\Supplier;

use App\Validation\Validator;

class UpdateRequest extends Validator
{
    public function rules()
    {
        return [
            'name' => 'required|min:1',
            'type' => 'required',
            'product_type'=> 'required',
        ];
    }
}
