<?php

namespace App\Validation\Import;

use App\Validation\Validator;

class CreateRequest extends Validator
{
    public function rules()
    {
        return [
            'date' => 'required|date',
            'total_cost' => 'required|numeric',
        ];
    }
}
