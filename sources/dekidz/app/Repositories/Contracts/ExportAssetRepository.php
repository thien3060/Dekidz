<?php

namespace App\Repositories\Contracts;

use App\Repositories\Repository;

interface ExportAssetRepository extends Repository
{
    public function getExportAsset();
}
