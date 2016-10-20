<?php

namespace App\Validation\FoodSetType;

use App\Validation\Validator;

class CreateRequest extends Validator
{
    public function rules()
    {
        return [
            'code' => 'required|min:1',
            'name' => 'required',
        ];
    }
}
