<?php
namespace App\Repositories\Contracts;

use App\Repositories\Repository;

interface SupplierRepository extends Repository
{
    public function getSupplier();
}
