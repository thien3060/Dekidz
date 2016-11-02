<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'menus';

    protected $fillable = [
        'date',
        'breakfast_id',
        'lunch_id',
        'mid_afternoon_id'
    ];
}
