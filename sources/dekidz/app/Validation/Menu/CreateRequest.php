<?php

namespace App\Validation\Menu;

use App\Validation\Validator;

class CreateRequest extends Validator
{
    public function rules()
    {
        return [
            'date' => 'required|date',
            'breakfast_id' => 'required|numeric|not_in:0',
            'lunch_id' => 'required|numeric|not_in:0',
            'mid_afternoon_id' => 'required|numeric|not_in:0',
        ];
    }
}
