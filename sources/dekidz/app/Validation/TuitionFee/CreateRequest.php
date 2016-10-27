<?php

namespace App\Validation\TuitionFee;

use App\Validation\Validator;

class CreateRequest extends Validator
{
    public function rules()
    {
        return [
            'student_id'=> 'required',
            'debt'=> 'required',
            'paid'=> 'required',
            'year'=> 'required',
            'month'=> 'required',
        ];

    }
}
