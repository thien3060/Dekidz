<?php

namespace App\Repositories\Contracts;

use App\Repositories\Repository;

interface StudentRepository extends Repository
{
    public function getStudent();
}
