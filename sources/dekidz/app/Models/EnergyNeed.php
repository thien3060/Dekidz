<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EnergyNeed extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'energy_needs';
    protected $fillable = [
        'age',
        'daily_cal',
        'school_time_cal',
        'daily_protid',
        'school_time_protid',
        'daily_lipid',
        'school_time_lipid',
        'daily_glucid',
        'school_time_glucid',
    ];
}
