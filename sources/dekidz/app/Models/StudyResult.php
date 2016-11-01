<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudyResult extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'class_id',
        'semester',
        'lesson_id'
    ];
    
    protected $table = 'study_result';

//    public function foods(){
//        return $this->belongsToMany('App\Models\Asset', 'export_detail', 'export_id', 'good_id')->withPivot('quantity');
//    }
}
