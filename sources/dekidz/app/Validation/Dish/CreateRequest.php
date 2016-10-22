<?php

namespace App\Validation\Dish;

use App\Validation\Validator;

class CreateRequest extends Validator
{
    public function rules()
    {
        return [
            'name' => 'required|min:2',
            'type_id' => 'required|min:1',
            'preparing_description' => 'required|min:5',
            'cooking_description' => 'required|min:5',
            'chef' => 'required',
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
