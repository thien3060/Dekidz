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
        $subjects = SubjectTopic::lists('name', 'id');
        $teachers = Staff::where('position', '=', 'teacher')->lists('name', 'id');

        $view->with(compact('classes', 'subjects', 'teachers'));
    }
}
