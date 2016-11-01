<?php

namespace App\Validation\RemIn;

use App\Validation\Validator;

class CreateRequest extends Validator
{
    public function rules()
    {
        return [
              "reason" => "required|min:5",
              "date" => "required|date",
              "received" => "required|numeric",
              "debt" => "required|numeric",
              "total" => "required|numeric",
        ];
    }
}
