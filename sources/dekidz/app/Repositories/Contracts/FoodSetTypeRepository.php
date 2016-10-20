<?php

namespace App\Repositories\Contracts;

use App\Repositories\Repository;

interface FoodSetTypeRepository extends Repository
{
    public function getFoodSetType();
}
