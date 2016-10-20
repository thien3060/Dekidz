<?php

namespace App\Repositories\Contracts;

use App\Repositories\Repository;

interface DishTypeRepository extends Repository
{
    public function getDishType();
}
