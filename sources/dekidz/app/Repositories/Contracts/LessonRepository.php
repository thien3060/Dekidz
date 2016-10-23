<?php

namespace App\Repositories\Contracts;

use App\Repositories\Repository;

interface LessonRepository extends Repository
{
    public function getLesson();
}
