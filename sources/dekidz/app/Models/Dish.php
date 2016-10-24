<?php
/**
 * Created by PhpStorm.
 * User: xuanthudoan
 * Date: 10/3/16
 * Time: 8:23 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Dish extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'dishes';
    protected $fillable = [
        'type_id',
        'name',
        'total_cost',
        'preparing_description',
        'cooking_description',
        'chef',
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

    public function foods(){
        return $this->belongsToMany('App\Models\Food', 'dish_detail', 'dish_id', 'food_id')->withPivot('quantity', 'price');
    }
}