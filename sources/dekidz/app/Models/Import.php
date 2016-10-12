<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Import extends Model
{
    protected $fillable = [
        'date',
        'cost',
        'is_food',
        'created_by'
    ];
    
    protected $table = 'import';

    public function foods(){
        return $this->belongsToMany('App\Models\Food', 'import_detail', 'import_id', 'good_id')->withPivot('supplier', 'quantity', 'cost');
    }
}
