<?php

namespace App\Validation\MaintenanceBallot;

use App\Validation\Validator;

class CreateRequest extends Validator
{
    public function rules()
    {
        return [
            'date' => 'required|date',
        ];
    }
}
