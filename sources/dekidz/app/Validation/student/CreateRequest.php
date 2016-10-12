<?php

namespace App\Validation\Student;

use App\Validation\Validator;

class CreateRequest extends Validator
{
    public function rules()
    {
        return [
            'name' => 'required|min:5',
            'dob' => 'required|date',
            'address' => 'required',
            'father_name' => 'required|min:5',
            'mother_name' => 'required|min:5',
            'father_phone' => 'required|regex:/^[\d -]+$/',
            'mother_phone' => 'required|regex:/^[\d -]+$/',
            'entry_card' => 'required|numeric',
        ];
    }
}
