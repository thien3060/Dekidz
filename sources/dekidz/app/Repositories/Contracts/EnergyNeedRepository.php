<?php

namespace App\Repositories\Contracts;

use App\Repositories\Repository;

interface EnergyNeedRepository extends Repository
{
    public function getEnergyNeed();
}
