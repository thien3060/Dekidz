<?php

namespace App\Repositories\Contracts;

use App\Repositories\Repository;

interface MaintenanceBallotRepository extends Repository
{
    public function getMaintenanceBallot();
}
