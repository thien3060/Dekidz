<?php

namespace App\Http\Composers;

use App\Models\DekidzClass;
use App\Models\Staff;
use App\Models\SubjectTopic;

class TeachScheduleFormComposer
{
    public function compose($view)
    {
        $classes = DekidzClass::lists('name', 'id');
        $subjects = SubjectTopic::withTrashed()->lists('name', 'id');
        $teachers = Staff::where('position', '=', 'teacher')->lists('name', 'id');
        $semesters = [1,2];

        $view->with(compact('classes', 'subjects', 'teachers', 'semesters'));
    }
}
