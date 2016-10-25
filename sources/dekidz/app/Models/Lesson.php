<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'lessons';
    protected $fillable = [
        'subject_topic_id',
        'lesson_name',
        'lesson_goal',
        'teach_activity',
        'kid_activity',
        'author'
    ];

}
