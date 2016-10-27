<?php

namespace App\Http\Composers;

use App\Models\Student;

class TuitionFeeFormComposer
{
    public function compose($view)
    {
        $students = Student::lists('name', 'id');

        $view->with(compact('students'));
    }
}
