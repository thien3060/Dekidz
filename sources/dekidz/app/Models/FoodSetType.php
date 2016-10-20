<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodSetType extends Model
{
    protected $table = 'food_set_type';

    protected $fillable = [
        'name',
        'notes'
    ];

}
