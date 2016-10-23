<?php

namespace App\Http\Composers;

use App\Models\SubjectTopic;

class LessonFormComposer
{
    public function compose($view)
    {
        $subject_topics = SubjectTopic::lists('name', 'id');

        $view->with(compact('subject_topics'));
    }
}
