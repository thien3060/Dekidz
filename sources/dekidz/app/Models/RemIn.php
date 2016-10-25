<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RemIn extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'rem_in';

    protected $fillable = [
        "reason",
        "code",
        "date",
        "received",
        "debt",
        "total",
        "note"
    ];
}
