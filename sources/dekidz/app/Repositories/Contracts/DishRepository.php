<?php

namespace App\Repositories\Contracts;

use App\Repositories\Repository;

interface DishRepository extends Repository
{
    public function getDish();
}
