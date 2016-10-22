<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeachSchedule extends Model
{
    protected $table = 'teach_schedules';

    protected $fillable = [
        "day",
        "date"
    ];
    
    public function dekidz_class(){
        return $this->belongsTo('App\Models\DekidzClass');
    }

    public function morning_teacher(){
        return $this->belongsTo('App\Models\Staff');
    }

    public function afternoon_teacher(){
        return $this->belongsTo('App\Models\Staff');
    }
    
    public function morning_lesson(){
        return $this->belongsTo('App\Models\SubjectTopic');
    }

    public function afternoon_lesson(){
        return $this->belongsTo('App\Models\SubjectTopic');
    }
}
