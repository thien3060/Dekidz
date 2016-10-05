<?php

namespace App\Validation\Food;

use App\Validation\Validator;

class UpdateRequest extends Validator
{
    public function rules()
    {
        return [
            'food_group_id'=> 'required',
            'name'=> 'required|min:2',
            'animal_source'=> 'required',
            'in_kg'=> 'required',
            'unit'=> 'required',
            'price'=> 'required',
            'absorb'=> 'required',
            'digest'=> 'required',
            'calo'=> 'required',
            'h2o'=> 'required',
            'protid'=> 'required',
            'lipid'=> 'required',
            'glucid'=> 'required',
            'cellulose'=> 'required',
            'cholesterol'=> 'required',
            'calci'=> 'required',
            'photpho'=> 'required',
            'iron'=> 'required',
            'vitamin_caroten'=> 'required',
            'vitamina'=> 'required',
            'vitaminb1'=> 'required',
            'vitaminb2'=> 'required',
            'vitaminpp'=> 'required',
            'vitaminc'=> 'required',
        ];
    }
}
