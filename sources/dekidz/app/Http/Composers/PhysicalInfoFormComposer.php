<?php

namespace App\Http\Composers;

use App\Models\Student;

class PhysicalInfoFormComposer
{
    public function compose($view)
    {
        $student_ids = Student::lists('name', 'id');

        $view->with(compact('student_ids'));
    }
}
