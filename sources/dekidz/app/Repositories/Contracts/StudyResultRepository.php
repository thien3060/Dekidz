<?php

namespace App\Repositories\Contracts;

use App\Repositories\Repository;

interface StudyResultRepository extends Repository
{
    public function getStudyResult();
    
    public function getDetail($data);
}
