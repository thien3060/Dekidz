<?php

namespace App\Validation\TeachSchedule;

use App\Validation\Validator;

class UpdateRequest extends Validator
{
    public function rules()
    {
        return [
            'schedule.class_id' => 'required',
            'schedule.semester' => 'required',
            'schedule_detail.period' => 'required',
            'schedule_detail.day' => 'required',
            'schedule_detail.teacher' => 'required',
            'schedule_detail.lesson' => 'required',
        ];
    }
}
