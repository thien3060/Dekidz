<?php

namespace App\Validation\RemIn;

use App\Validation\Validator;

class UpdateRequest extends Validator
{
    public function rules()
    {
        return [
            "in_reason" => "required|min:5",
            "in_code" => "required|numeric",
            "in_date" => "required|date",
            "in_received" => "required|numeric",
            "in_dept" => "required|numeric",
            "in_total" => "required|numeric",
            "in_status" => "required|boolean",
        ];
    }
}
