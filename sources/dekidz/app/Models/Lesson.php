<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
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
