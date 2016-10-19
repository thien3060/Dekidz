<?php

namespace App\Validation\PhysicalInfo;

use App\Validation\Validator;

class CreateRequest extends Validator
{
    public function rules()
    {
        return [
            'student_id' => 'required|numeric',
            'gender' => 'required',
            'age' => 'required|numeric',
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'BMI' => 'required|numeric',
        ];
    }
}
