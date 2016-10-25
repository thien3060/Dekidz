<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DishType extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'dish_type';

    protected $fillable = [
        'name'
    ];

}
