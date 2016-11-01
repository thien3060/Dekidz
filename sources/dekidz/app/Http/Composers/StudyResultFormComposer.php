<?php

namespace App\Http\Composers;

use App\Models\DekidzClass;
use App\Models\Lesson;

class LessonFormComposer
{
    public function compose($view)
    {
        $classes = DekidzClass::lists('name', 'id');

        $view->with(compact('classes'));

        $lessons = Lesson::lists('name', 'id');

        $view->with(compact('lessons'));
    }
}
