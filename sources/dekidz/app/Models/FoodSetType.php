<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FoodSetType extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'food_set_type';

    protected $fillable = [
        'name'
    ];
    
    public function foodsets(){
        return $this->hasMany('App\Models\FoodSet', 'type_id');
    }

}
