<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staffs';

    protected $fillable = [
          "name",
          "code",
          "gender",
          "dob",
          "identity_card",
          "religion",
          "address",
          "department_id",
          "issued_by",
          "phone",
          "email",
          "position",
          "degree",
          "is_leaguer",
          "working_status",
          "start_day",
          "type_of_contract",
    ];
    
    public function salary(){
        return $this->hasOne('App\Models\Salary');
    }

    public function morning_lesson(){
        return $this->hasMany('App\Models\TeachSchedule');
    }

    public function afternoon_lesson(){
        return $this->hasMany('App\Models\TeachSchedule');
    }
}
