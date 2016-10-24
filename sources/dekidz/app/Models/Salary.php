<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'salary';

    protected $fillable = [
        "staff_id",
        "base_salary",
        "wage_index",
        "bonus",
        "minus",
        "salary"
    ];

    public function staff(){
        return $this->belongsTo('App\Models\Staff', 'staff_id');
    }
}
