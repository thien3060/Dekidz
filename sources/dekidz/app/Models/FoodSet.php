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
        'cal',
        'cal_needed',
        'protid',
        'protid_needed',
        'lipid',
        'lipid_needed',
        'glucid',
        'glucid_needed',
        'plg_proportion',
        'plg_proportion_needed',
        'cal_proportion',
        'protid_proportion',
        'lipid_proportion',
        'glucid_proportion',
        'protid_dv',
        'protid_tv',
        'lipid_dv',
        'lipid_tv',
        'total_cost'
    ];

    public function dishes(){
        return $this->belongsToMany('App\Models\Dish', 'food_set_detail', 'food_set_id', 'dish_id')->withPivot('quantity', 'price');
    }

}
