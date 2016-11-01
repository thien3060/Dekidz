<?php

namespace App\Http\Composers;

use App\Models\Department;

class StaffFormComposer
{
    public function compose($view)
    {
        $departments = Department::lists('name', 'id');
        $gender = [0 => 'Nữ', 1 => 'Nam'];

        $view->with(compact('departments', 'gender'));
    }
}
