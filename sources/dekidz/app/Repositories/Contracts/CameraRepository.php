<?php

namespace App\Repositories\Contracts;

use App\Repositories\Repository;

interface CameraRepository extends Repository
{
    public function getCamera();
}
