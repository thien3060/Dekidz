<?php

namespace App\Validation\DishType;

use App\Validation\Validator;

class CreateRequest extends Validator
{
    public function rules()
    {
        return [
            'name' => 'required|min:1',
        ];
    }
}
