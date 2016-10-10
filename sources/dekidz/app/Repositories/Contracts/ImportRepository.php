<?php

namespace App\Repositories\Contracts;

use App\Repositories\Repository;

interface ImportRepository extends Repository
{
    public function getImport();
}
