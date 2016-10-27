<?php

namespace App\Http\Composers;

use App\Models\DekidzClass;
use App\Models\Lesson;
use App\Models\Staff;
use App\Models\SubjectTopic;

class TeachScheduleFormComposer
{
    public function compose($view)
    {
        $classes = DekidzClass::lists('name', 'id');
        $lessons = Lesson::withTrashed()->lists('lesson_name', 'id');
        $teachers = Staff::where('position', '=', 'teacher')->lists('name', 'id');
        $semesters = [1 => 1, 2 => 2];

        $view->with(compact('classes', 'lessons', 'teachers', 'semesters'));
    }
}
