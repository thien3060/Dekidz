<?php

namespace App\Http\Composers;

use App\Models\DekidzClass;
use App\Models\Lesson;
use App\Models\Student;

class StudentListComposer
{
    public function compose($view)
    {
        $students = Student::lists('name', 'id');

        $view->with(compact('students'));
    }
}
