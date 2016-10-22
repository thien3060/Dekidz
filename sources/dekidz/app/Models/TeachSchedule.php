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
        "day",
        "date"
    ];
    
    public function dekidz_class(){
        return $this->belongsTo('App\Models\DekidzClass', 'class_id');
    }

    public function morning_lesson(){
        return $this->belongsTo('App\Models\SubjectTopic', 'morning_lesson_id');
    }

    public function morning_teacher(){
        return $this->belongsTo('App\Models\Staff', 'morning_teacher_id');
    }

    public function afternoon_lesson(){
        return $this->belongsTo('App\Models\SubjectTopic', 'afternoon_lesson_id');
    }

    public function afternoon_teacher(){
        return $this->belongsTo('App\Models\Staff', 'afternoon_teacher_id');
    }
}
