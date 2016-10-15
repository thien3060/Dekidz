<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RemIn extends Model
{
    protected $table = 'rem_in';

    protected $fillable = [
        "in_reason",
        "in_code",
        "in_date",
        "in_received",
        "in_dept",
        "in_total",
        "in_status",
        "in_note"
    ];
}
