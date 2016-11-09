<?php

namespace App\Validation\Staff;

use App\Validation\Validator;

class UpdateRequest extends Validator
{
    public function rules()
    {
        return [
            "name" => "required|min:5",
            "code" => "required|numeric",
            "gender" => "required",
            "dob" => "required|date",
            "identity_card" => "required|numeric",
            "address" => "required",
            "department_id" => "required|selected",
            "phone" => 'required|regex:/^[\d -]+$/',
            "email" => "required|email",
            "position" => "required|selected",
            "degree" => "required",
            "start_day" => "required|date",
            "type_of_contract" => "required",
        ];
    }
}
