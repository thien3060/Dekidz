<?php

namespace App\Validation\SubjectTopic;

use App\Validation\Validator;

class UpdateRequest extends Validator
{
    public function rules()
    {
        return [
            "name" => "required|min:5",
            "description" => "required"
        ];
    }
}
