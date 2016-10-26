<?php

namespace App\Repositories\Contracts;

use App\Repositories\Repository;

interface TuitionFeeRepository extends Repository
{
    public function getTuitionFee();
}
