<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubjectTopic extends Model
{
    protected $table = 'subject_topics';

    protected $fillable = [
        "code",
        "name",
        "description"
    ];
}
