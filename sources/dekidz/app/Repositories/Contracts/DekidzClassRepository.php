<?php
namespace App\Repositories\Contracts;

use App\Repositories\Repository;

interface DekidzClassRepository extends Repository
{
    public function getDekidzClass();
}
