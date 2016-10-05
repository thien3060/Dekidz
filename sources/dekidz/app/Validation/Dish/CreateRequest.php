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
            'preparing_description' => 'required',
            'cooking_description' => 'required',
            'chef' => 'required',
            'protid_dv' => 'required',
            'protid_tv' => 'required',
            'lipid_dv' => 'required',
            'lipid_tv' => 'required',
            'glucid' => 'required',
            'calo' => 'required',
            'canxi' => 'required',
            'photpho' => 'required',
            'iron' => 'required',
            'vitamina' => 'required',
            'vitaminb1' => 'required',
            'vitaminb2' => 'required',
            'vitaminpp' => 'required',
            'vitaminc' => 'required',

        ];
    }
}
