<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MaintenanceBallot extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'created_by',
        'date'
    ];
    
    protected $table = 'maintenance';

    public function foods(){
        return $this->belongsToMany('App\Models\Asset', 'maintenance_detail', 'maintenance_id', 'asset_id')->withPivot('quantity', 'status');
    }
}
