<?php

namespace App\Repositories\Contracts;

use App\Repositories\Repository;

interface ExportRepository extends Repository
{
    public function getExport();
}
