<?php

namespace App\Validation\FoodSetType;

use App\Validation\Validator;

class UpdateRequest extends Validator
{
    public function rules()
    {
        return [
            'name' => 'required|min:1',
            'notes' => 'required',
        ];
    }
}
