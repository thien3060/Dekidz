<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubjectTopic extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    
    protected $table = 'subject_topics';

    protected $fillable = [
        'code',
        'name',
        'description'
    ];

    public function morning_schedules(){
        return $this->hasMany('App\Models\TeachSchedule', 'morning_lesson_id');
    }

    public function afternoon_schedules(){
        return $this->hasMany('App\Models\TeachSchedule', 'afternoon_lesson_id');
    }
}
