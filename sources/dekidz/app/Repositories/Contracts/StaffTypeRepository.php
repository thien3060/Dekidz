<?php

namespace App\Repositories\Contracts;

use App\Repositories\Repository;

interface StaffTypeRepository extends Repository
{
    public function getStaffType();
}
