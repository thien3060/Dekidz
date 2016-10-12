<?php

namespace App\Validation\FoodSet;

use App\Validation\Validator;

class CreateRequest extends Validator
{
    public function rules()
    {
        return [
            'type_id'=> 'required',
            'age'=> 'required|numeric',
            'quantity'=> 'required|numeric',
            'name'=> 'required|min:5',
            'total_cost'=> 'required|numeric',
        ];
    }
}
