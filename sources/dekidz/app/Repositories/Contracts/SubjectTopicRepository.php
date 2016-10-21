<?php

namespace App\Repositories\Contracts;

use App\Repositories\Repository;

interface SubjectTopicRepository extends Repository
{
    public function getSubjectTopic();
}
