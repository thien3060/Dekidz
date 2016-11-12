<?php

namespace App\Validation\Department;

use App\Validation\Validator;

class UpdateRequest extends Validator
{
    public function rules()
    {
        return [
            'name' => "required|min:5",
        ];
    }
}
