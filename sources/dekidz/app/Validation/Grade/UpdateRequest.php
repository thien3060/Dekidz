<?php

namespace App\Validation\Grade;

use App\Validation\Validator;

class UpdateRequest extends Validator
{
    public function rules()
    {
        return [
            "name" => "required",
        ];
    }
}
