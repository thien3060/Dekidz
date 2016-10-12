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
            'protid_dv' => 'numeric',
            'protid_tv' => 'numeric',
            'lipid_dv' => 'numeric',
            'lipid_tv' => 'numeric',
            'glucid' => 'numeric',
            'calo' => 'numeric',
            'canxi' => 'numeric',
            'photpho' => 'numeric',
            'iron' => 'numeric',
            'vitamina' => 'numeric',
            'vitaminb1' => 'numeric',
            'vitaminb2' => 'numeric',
            'vitaminpp' => 'numeric',
            'vitaminc' => 'numeric',

        ];
    }
}
