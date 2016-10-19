<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RemOut extends Model
{
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
