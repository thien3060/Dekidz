<?php

namespace App\Repositories\Contracts;

use App\Repositories\Repository;

interface GradeRepository extends Repository
{
    public function getGrade();
}
