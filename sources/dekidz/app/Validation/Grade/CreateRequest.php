<?php

namespace App\Validation\Grade;

use App\Validation\Validator;

class CreateRequest extends Validator
{
    public function rules()
    {
        return [
            "name" => "required",
        ];
    }
}
