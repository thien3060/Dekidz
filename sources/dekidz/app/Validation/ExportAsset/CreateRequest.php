<?php

namespace App\Validation\ExportAsset;

use App\Validation\Validator;

class CreateRequest extends Validator
{
    public function rules()
    {
        return [
            'date' => 'required|date',
        ];
    }
}
