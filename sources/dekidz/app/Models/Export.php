<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Export extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'date',
        'is_food',
        'created_by'
    ];
    
    protected $table = 'export';

    public function foods(){
        return $this->belongsToMany('App\Models\Food', 'export_detail', 'export_id', 'good_id')->withPivot('quantity');
    }
}
