<?php

namespace App\Validation\RemOut;

use App\Validation\Validator;

class CreateRequest extends Validator
{
    public function rules()
    {
        return [
            "out_reason" => "required|min:5",
            "out_code" => "required|numeric",
            "out_date" => "required|date",
            "out_paid" => "required|numeric",
            "out_debt" => "required|numeric",
            "out_total" => "required|numeric",
        ];
    }
}
