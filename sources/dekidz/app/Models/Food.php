<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = [
        'food_group_id',
        'name',
        'animal_source',
        'in_kg',
        'unit',
        'price',
        'absorb',
        'digest',
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
    
    public function imports(){
        return $this->belongsToMany('App\Models\Import', 'import_detail', 'good_id', 'import_id')->withPivot('supplier', 'quantity', 'cost');
    }
}
