<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExportAsset extends Model
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
        return $this->belongsToMany('App\Models\Asset', 'export_detail', 'export_id', 'good_id')->withPivot('quantity');
    }
}
