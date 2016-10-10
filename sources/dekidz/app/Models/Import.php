<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Import extends Model
{
    protected $fillable = [
        'date',
        'cost',
        'is_food',
        'created_by'
    ];
    
    protected $table = 'import';
}
