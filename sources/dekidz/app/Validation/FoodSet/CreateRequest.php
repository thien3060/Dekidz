<?php

namespace App\Validation\FoodSet;

use App\Validation\Validator;

class CreateRequest extends Validator
{
    public function rules()
    {
        return [
            'type_id'=> 'required|selected',
            'age'=> 'required|numeric',
            'quantity'=> 'required|numeric',
            'name'=> 'required|min:5',
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
            'total_cost'=> 'required|numeric',
        ];
    }
}
