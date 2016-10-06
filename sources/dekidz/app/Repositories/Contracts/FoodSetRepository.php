<?php

namespace App\Repositories\Contracts;

use App\Repositories\Repository;

interface FoodSetRepository extends Repository
{
    public function getFoodSet();
}
