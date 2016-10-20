<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodGroup extends Model
{
    protected $table = 'food_groups';

    protected $fillable = [
        'name'
    ];

}
