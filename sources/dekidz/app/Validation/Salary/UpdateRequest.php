<?php

namespace App\Validation\Salary;

use App\Validation\Validator;

class UpdateRequest extends Validator
{
    public function rules()
    {
        return [
            "staff_id" => "required|numeric",
            "base_salary" => 'required|regex:/^[0-9]\d*(\.\d+)?$/',
            "wage_index" => 'required|regex:/^[0-9]\d*(\.\d+)?$/',
            "bonus" => 'required|regex:/^[0-9]\d*(\.\d+)?$/',
            "minus" => 'required|regex:/^[0-9]\d*(\.\d+)?$/',
            "salary" => 'required|regex:/^[0-9]\d*(\.\d+)?$/'
        ];
    }
}
