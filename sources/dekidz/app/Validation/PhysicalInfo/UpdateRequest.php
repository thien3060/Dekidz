<?php

namespace App\Validation\PhysicalInfo;

use App\Validation\Validator;

class UpdateRequest extends Validator
{
    public function rules()
    {
        return [
            'student_id' => 'required|numeric',
            'gender' => 'required',
            'months' => 'required|numeric',
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'BMI' => 'required|numeric',
        ];
    }
}
