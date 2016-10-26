<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TuitionFee extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'tuition_fee';
    protected $fillable = [
        'student_id',
        'debt',
        'paid',
        'year',
        'month'
    ];

}
