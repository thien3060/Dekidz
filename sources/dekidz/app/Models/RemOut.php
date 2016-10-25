<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RemOut extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'rem_out';

    protected $fillable = [
        "reason",
        "code",
        "date",
        "paid",
        "debt",
        "total"
    ];
}
