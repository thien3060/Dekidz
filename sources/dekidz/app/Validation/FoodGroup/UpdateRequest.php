<?php

namespace App\Validation\FoodGroup;

use App\Validation\Validator;

class UpdateRequest extends Validator
{
    public function rules()
    {
        return [
            'name' => 'required|min:1',
        ];
    }
}
