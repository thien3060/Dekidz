<?php

namespace App\Validation\EnergyNeed;

use App\Validation\Validator;

class UpdateRequest extends Validator
{
    public function rules()
    {
        return [
            'age'=> 'required',
            'calo'=> 'numeric',
            'h2o'=> 'numeric',
            'protid'=> 'numeric',
            'lipid'=> 'numeric',
            'glucid'=> 'numeric',
            'cellulose'=> 'numeric',
            'cholesterol'=> 'numeric',
            'calci'=> 'numeric',
            'photpho'=> 'numeric',
            'iron'=> 'numeric',
            'vitamin_caroten'=> 'numeric',
            'vitamina'=> 'numeric',
            'vitaminb1'=> 'numeric',
            'vitaminb2'=> 'numeric',
            'vitaminpp'=> 'numeric',
            'vitaminc'=> 'numeric',
        ];
    }
}
