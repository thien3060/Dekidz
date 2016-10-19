<?php

namespace App\Validation\RemOut;

use App\Validation\Validator;

class CreateRequest extends Validator
{
    public function rules()
    {
        return [
            "reason" => "required|min:5",
            "code" => "required|numeric",
            "date" => "required|date",
            "paid" => "required|numeric",
            "debt" => "required|numeric",
            "total" => "required|numeric",
        ];
    }
}
