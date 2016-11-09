<?php

namespace App\Validation\TuitionFee;

use App\Validation\Validator;

class CreateRequest extends Validator
{
    public function rules()
    {
        return [
            'student_id'=> 'required|selected',
            'debt'=> 'required',
            'paid'=> 'required',
            'year'=> 'required',
            'month'=> 'required',
        ];

    }
}
