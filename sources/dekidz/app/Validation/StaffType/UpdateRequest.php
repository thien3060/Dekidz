<?php

namespace App\Validation\StaffType;

use App\Validation\Validator;

class UpdateRequest extends Validator
{
    public function rules()
    {
        return [
            'name' => 'required|min:1',
            'description' => 'required'
        ];
    }
}
