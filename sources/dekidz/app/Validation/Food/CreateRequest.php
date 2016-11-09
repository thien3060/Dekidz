<?php

namespace App\Validation\Food;

use App\Validation\Validator;

class CreateRequest extends Validator
{
    public function rules()
    {
        return [
            'food_group_id'=> 'required|selected',
            'name'=> 'required|min:2',
            'animal_source'=> 'required',
            'quantity'=> 'numeric',
            'unit'=> 'required',
            'price'=> 'numeric',
            'absorb'=> 'required',
            'digest'=> 'required',
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
