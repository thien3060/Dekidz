<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EnergyNeed extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'nutritional_requirements';
    protected $fillable = [
        'age',
        'calo',
        'h2o',
        'protid',
        'lipid',
        'glucid',
        'cellulose',
        'cholesterol',
        'calci',
        'photpho',
        'iron',
        'vitamin_caroten',
        'vitamina',
        'vitaminb1',
        'vitaminb2',
        'vitaminpp',
        'vitaminc'
    ];
}
