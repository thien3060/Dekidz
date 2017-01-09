<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name',
        'email',
        'gender',
        'dob',
        'address',
        'nation',
        'religion',
        'father_name',
        'father_dob',
        'father_job',
        'mother_name',
        'mother_dob',
        'mother_job',
        'father_phone',
        'mother_phone',
        'picture',
        'admission_date',
        'completion_date',
        'note',
        'entry_card'
    ];

    public function students(){
        return DB::table('students')->count();
    }
    
    public function dekidzClass(){
        return $this->belongsToMany('App\Models\DekidzClass', 'class_detail', 'class_id', 'student_id');
    }
    
    public function physical_info(){
        return $this->hasMany('App\Models\PhysicalInfo', 'student_id');
    }
}
