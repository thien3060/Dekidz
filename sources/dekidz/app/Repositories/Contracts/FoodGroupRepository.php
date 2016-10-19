<?php

namespace App\Repositories\Contracts;

use App\Repositories\Repository;

interface FoodGroupRepository extends Repository
{
    public function getFoodGroup();
}
