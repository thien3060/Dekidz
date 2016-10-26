<?php

namespace App\Validation\FoodSetType;

use App\Validation\Validator;

class CreateRequest extends Validator
{
    public function rules()
    {
        return [
            'name' => 'required',
        ];
    }
}
