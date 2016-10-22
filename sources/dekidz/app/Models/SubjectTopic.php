<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubjectTopic extends Model
{
    protected $table = 'subject_topics';

    protected $fillable = [
        "code",
        "name",
        "description"
    ];

    public function morning_schedules(){
        return $this->hasMany('App\Models\TeachSchedule');
    }

    public function afternoon_schedules(){
        return $this->hasMany('App\Models\TeachSchedule');
    }
}
