<?php

namespace App\Repositories\Contracts;

use App\Repositories\Repository;

interface ImportAssetRepository extends Repository
{
    public function getImport();
}
