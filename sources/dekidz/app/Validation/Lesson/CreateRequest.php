<?php

namespace App\Validation\Lesson;

use App\Validation\Validator;

class CreateRequest extends Validator
{
    public function rules()
    {
        return [
            'subject_topic_id' => 'required|selected',
            'lesson_name'=> 'required',
            'lesson_goal'=> 'required',
            'teach_activity'=> 'required',
            'kid_activity'=> 'required',
            'author'=> 'required',
        ];
    }
}
