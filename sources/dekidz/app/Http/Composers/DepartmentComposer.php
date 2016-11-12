<?php

namespace App\Http\Composers;

use App\Models\DekidzClass;
use App\Models\Lesson;
use App\Models\Staff;
use App\Models\Student;

class DepartmentComposer
{
    public function compose($view)
    {
        $staffs = Staff::lists('name', 'id');

        $view->with(compact('staffs'));
    }
}
