<?php

namespace App\Repositories\Contracts;

use App\Repositories\Repository;

interface DepartmentRepository extends Repository
{
    public function getDepartment();
}
