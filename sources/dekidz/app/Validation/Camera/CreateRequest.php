<?php

namespace App\Validation\Camera;

use App\Validation\Validator;

class CreateRequest extends Validator
{
    public function rules()
    {
        return [
            'name' => 'required|min:5',
            'url' => 'required',
        ];
    }
}
