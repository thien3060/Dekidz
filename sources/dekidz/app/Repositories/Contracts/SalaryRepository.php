<?php

namespace App\Repositories\Contracts;

use App\Repositories\Repository;

interface SalaryRepository extends Repository
{
    public function getSalary();
}
