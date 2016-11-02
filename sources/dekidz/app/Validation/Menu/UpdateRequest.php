<?php

namespace App\Validation\Menu;

use App\Validation\Validator;

class UpdateRequest extends Validator
{
    public function rules()
    {
        return [
            'date' => 'required|date',
            'breakfast_id' => 'required|numeric',
            'lunch_id' => 'required|numeric',
            'mid_afternoon_id' => 'required|numeric',
        ];
    }
}
