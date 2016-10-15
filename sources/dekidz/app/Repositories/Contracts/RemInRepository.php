<?php

namespace App\Repositories\Contracts;

use App\Repositories\Repository;

interface RemInRepository extends Repository
{
    public function getRemIn();
}
