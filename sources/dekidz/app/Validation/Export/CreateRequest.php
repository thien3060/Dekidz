<?php

namespace App\Validation\Export;

use App\Validation\Validator;

class CreateRequest extends Validator
{
    public function rules()
    {
        return [
            'date' => 'required|date',
            'cost' => 'required|numeric',
        ];
    }
}
