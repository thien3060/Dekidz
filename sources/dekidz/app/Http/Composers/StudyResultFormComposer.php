<?php

namespace App\Http\Composers;

use App\Models\DekidzClass;
use App\Models\Lesson;
use App\Models\Student;

class StudyResultFormComposer
{
    public function compose($view)
    {
        $classes = DekidzClass::lists('name', 'id');
        $lessons = Lesson::lists('lesson_name', 'id');

        $view->with(compact('classes', 'lessons', 'students'));
    }
}
