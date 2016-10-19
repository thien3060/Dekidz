<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodSet extends Model
{
    protected $fillable = [
        'type_id',
        'age',
        'quantity',
        'name',
        'description',
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
        'vitaminc',
        'total_cost'
    ];

    public function dishes(){
        return $this->belongsToMany('App\Models\Dish', 'food_set_detail', 'food_set_id', 'dish_id')->withPivot('quantity', 'price');
    }

}
