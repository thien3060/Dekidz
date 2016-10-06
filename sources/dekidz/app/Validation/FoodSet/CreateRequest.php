<?php

namespace App\Validation\FoodSet;

use App\Validation\Validator;

class CreateRequest extends Validator
{
    public function rules()
    {
        return [
            'type_id'=> 'required',
            'age'=> 'required',
            'quantity'=> 'required',
            'name'=> 'required',
            'total_cost'=> 'required',
        ];
    }
}
