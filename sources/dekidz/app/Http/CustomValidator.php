<?php
namespace App\Http;

class CustomValidator
{
    public function validateSelected($attribute, $value, $parameter, $validator){
        if($value == 0){
            return false;
        }
        return true;
    }
}
