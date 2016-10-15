<?php
namespace App\Repositories\Contracts;

use App\Repositories\Repository;

interface AssetRepository extends Repository
{
    public function getAsset();
}
