<?php

namespace App\Http\Composers;

use App\Models\Department;
use App\Models\StaffType;

class StaffFormComposer
{
    public function compose($view)
    {
        $departments = Department::lists('name', 'id');
        $positions = StaffType::lists('name', 'id');
        $gender = [0 => 'Nữ', 1 => 'Nam'];

        $view->with(compact('departments', 'gender', 'positions'));
    }
}
