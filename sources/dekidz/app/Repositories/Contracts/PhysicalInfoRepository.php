<?php

namespace App\Repositories\Contracts;

use App\Repositories\Repository;

interface PhysicalInfoRepository extends Repository
{
    public function getPhysicalInfo();
}
