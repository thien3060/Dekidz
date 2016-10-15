<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RemOut extends Model
{
    protected $table = 'rem_out';

    protected $fillable = [
        "out_reason",
        "out_code",
        "out_date",
        "out_paid",
        "out_debt",
        "out_total"
    ];
}
