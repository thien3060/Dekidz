<?php

namespace App\Repositories\Contracts;

use App\Repositories\Repository;

interface TeachScheduleRepository extends Repository
{
    public function getTeachSchedule();
    
    public function getTeachScheduleDetail($id, $semester);
    
    public function updateTeachSchedule($data);
}
