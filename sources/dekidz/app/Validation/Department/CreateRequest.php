<?php

namespace App\Validation\Department;

use App\Validation\Validator;

class CreateRequest extends Validator
{
    public function rules()
    {
        return [
            'name' => "required|min:5",
            'chief_id' => "required|numeric",
        ];
    }
}
