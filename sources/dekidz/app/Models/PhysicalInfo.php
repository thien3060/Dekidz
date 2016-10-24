<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhysicalInfo extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = "physical_info";

    protected $fillable = [
        'student_id',
        'gender',
        'age',
        'height',
        'weight',
        'BMI'
    ];
}
