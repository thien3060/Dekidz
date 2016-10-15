<?php

namespace App\Repositories\Contracts;

use App\Repositories\Repository;

interface RemOutRepository extends Repository
{
    public function getRemOut();
}
