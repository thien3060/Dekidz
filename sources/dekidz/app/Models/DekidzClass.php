<?php
/**
 * Created by PhpStorm.
 * User: xuanthudoan
 * Date: 10/3/16
 * Time: 8:23 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class DekidzClass extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'classes';
    protected $fillable = [
        'name',
        'teacher_id',
        'room_number',
        'grade_id',
        'school_year'
    ];
    
    public function teach_schedules(){
        return $this->hasMany('App\Models\TeachSchedule', 'class_id');
    }

    public function students(){
        return $this->belongsToMany('App\Models\Student', 'class_detail', 'class_id', 'student_id');
    }
}