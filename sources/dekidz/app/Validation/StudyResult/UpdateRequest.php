<?php

namespace App\Validation\StudyResult;

use App\Validation\Validator;

class UpdateRequest extends Validator
{
    public function rules()
    {
        return [
            'class_id' => 'required',
            'semester'=> 'required',
            'lesson_id'=> 'required',
        ];
    }
}
