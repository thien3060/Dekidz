<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodGroup extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'food_groups';

    protected $fillable = [
        'name'
    ];

}
