<?php

namespace App\Repositories\Contracts;

use App\Repositories\Repository;

interface ImportFoodRepository extends Repository
{
    public function getImport();
}
