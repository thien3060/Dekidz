<?php

namespace App\Validation\FoodGroup;

use App\Validation\Validator;

class CreateRequest extends Validator
{
    public function rules()
    {
        return [
            'name' => 'required|min:1',
            'code' => 'required',
        ];
    }
}
