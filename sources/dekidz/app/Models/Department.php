<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'departments';

    protected $fillable = [
        'name',
        'wage_index',
        'chief_id',
        'description'
    ];
}
