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
        'accountability'
    ];
    
    public function teach_schedules(){
        return $this->hasMany('App\Models\TeachSchedule', 'class_id');
    }
}