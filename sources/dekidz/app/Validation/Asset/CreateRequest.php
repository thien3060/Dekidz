<?php

namespace App\Validatio\Asset;

use App\Validation\Validator;

class CreateRequest extends Validator
{
    public function rules()
    {
        return [
            'name' => 'required|min:5',
            'quantity' => 'required',
            'supplier'=> 'required',
            'import_date'=> 'required',
            'maintenance_mode'=> 'required',
            'unit'=> 'required',
        ];
    }
}
