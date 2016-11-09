<?php

namespace App\Validation\DekidzClass;

use App\Validation\Validator;

class CreateRequest extends Validator
{
    public function rules()
    {
        return [
            'name' => 'required|min:1',
            'teacher_id' => 'required|selected',
            'room_number' => 'required',
            'grade_id' => 'required|selected',
            'school_year' => 'required',
        ];
    }
}
