<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Import extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'date',
        'total_cost',
        'is_food',
        'created_by'
    ];
    
    protected $table = 'import';

    public function foods(){
        return $this->belongsToMany('App\Models\Food', 'import_detail', 'import_id', 'good_id')->withPivot('quantity', 'price');
    }

    public function assets(){
        return $this->belongsToMany('App\Models\Asset', 'import_detail', 'import_id', 'good_id')->withPivot('quantity', 'price');
    }
}
