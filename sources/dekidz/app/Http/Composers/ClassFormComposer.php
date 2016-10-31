<?php

namespace App\Http\Composers;

use App\Models\Staff;
use App\Models\Grade;

class ClassFormComposer
{
    public function compose($view)
    {
        $staffs = Staff::lists('name', 'id');

        $view->with(compact('staffs'));

        $grades = Grade::lists('name', 'id');

        $view->with(compact('grades'));


    }
}
