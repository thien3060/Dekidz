<?php

namespace App\Repositories\Contracts;

use App\Repositories\Repository;

interface StaffRepository extends Repository
{
    public function getStaff();
}
