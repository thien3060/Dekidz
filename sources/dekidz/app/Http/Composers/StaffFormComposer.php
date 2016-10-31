<?php

namespace App\Http\Composers;

use App\Models\Department;

class StaffFormComposer
{
    public function compose($view)
    {
        $departments = Department::lists('name', 'id');

        $view->with(compact('departments'));
    }
}
