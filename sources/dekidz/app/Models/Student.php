<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name',
        'dob',
        'address',
        'nation',
        'religion',
        'father_name',
        'father_dob',
        'father_job',
        'mother_name',
        'mother_dob',
        'mother_job',
        'father_phone',
        'mother_phone',
        'picture',
        'admission_date',
        'completion_date',
        'note',
        'entry_card'
    ];
}
