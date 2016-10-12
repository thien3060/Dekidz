<?php

namespace App\Validation\DekidzClass;

use App\Validation\Validator;

class UpdateRequest extends Validator
{
    public function rules()
    {
        return [
            'name' => 'required|min:5',
            'teacher_id' => 'required',
            'room_number' => 'required',
            'grade_id' => 'required',
            'accountability' => 'required',
        ];
    }
}
