<?php

namespace App\Repositories\Contracts;

use App\Repositories\Repository;

interface FoodRepository extends Repository
{
    public function getFood();
}
