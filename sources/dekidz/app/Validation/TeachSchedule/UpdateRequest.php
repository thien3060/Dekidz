<?php

namespace App\Validation\TeachSchedule;

use App\Validation\Validator;

class UpdateRequest extends Validator
{
    public function rules()
    {
        return [
            'day' => 'required',
            'date' => 'required|date',
            'class' => 'required|numeric',
            'morning_lesson' => 'required|numeric',
            'morning_teacher' => 'required|numeric',
            'afternoon_lesson' => 'required|numeric',
            'afternoon_teacher' => 'required|numeric',
        ];
    }
}
