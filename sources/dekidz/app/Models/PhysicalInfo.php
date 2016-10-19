<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhysicalInfo extends Model
{
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
