<?php

namespace App\Repositories\Contracts;

use App\Repositories\Repository;

interface MenuRepository extends Repository
{
    public function getMenu();
}
