<?php

namespace App\Validation\RemOut;

use App\Validation\Validator;

class UpdateRequest extends Validator
{
    public function rules()
    {
        return [
            "reason" => "required|min:5",
            "date" => "required|date",
            "paid" => "required|numeric",
            "debt" => "required|numeric",
            "total" => "required|numeric",
        ];
    }
}
