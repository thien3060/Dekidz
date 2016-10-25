<?php

namespace App\Validation\ExportAsset;

use App\Validation\Validator;

class UpdateRequest extends Validator
{
    public function rules()
    {
        return [
            'date' => 'required|date',
        ];
    }
}
