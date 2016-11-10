<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeachSchedule extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'teach_schedules';

    protected $fillable = [
        'class_id',
        'semester'
    ];
    
    public function dekidz_class(){
        return $this->belongsTo('App\Models\DekidzClass', 'class_id');
    }
}
