<?php

namespace App\Validation\EnergyNeed;

use App\Validation\Validator;

class UpdateRequest extends Validator
{
    public function rules()
    {
        return [
            'age'=> 'required',
            'daily_cal'=> 'required',
            'school_time_cal'=> 'required',
            'daily_protid'=> 'required',
            'school_time_protid'=> 'required',
            'daily_lipid'=> 'required',
            'school_time_lipid'=> 'required',
            'daily_glucid'=> 'required',
            'school_time_glucid'=> 'required',
        ];
    }
}
