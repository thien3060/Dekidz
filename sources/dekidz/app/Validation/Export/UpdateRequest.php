<?php

namespace App\Validation\Export;

use App\Validation\Validator;

class UpdateRequest extends Validator
{
    public function rules()
    {
        return [
            'date' => 'required|date',
        ];
    }
}
