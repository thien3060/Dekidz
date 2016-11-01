<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StaffType extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'staff_types';

    protected $fillable = [
        "name",
        "description"
    ];
    
    public function staffs(){
        return $this->hasMany('App\Models\Staff', 'position');
    }
}
