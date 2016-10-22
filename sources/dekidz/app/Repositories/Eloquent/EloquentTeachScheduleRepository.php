<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Repositories\Contracts\SalaryRepository;
use App\Repositories\Contracts\StaffRepository;
use App\Repositories\Contracts\TeachScheduleRepository;

class EloquentTeachScheduleRepository implements TeachScheduleRepository
{
    public function perPage()
    {
        return config('admin.teach_schedule.perpage');
    }

    public function getModel(){
        $model = config('admin.teach_schedule.model');
        return new $model();
    }

    public function allOrSearch($searchQuery = null)
    {
        if (is_null($searchQuery)) {
            return $this->getAll();
        }

        return $this->search($searchQuery);
    }

    public function getAll()
    {
        return $this->getTeachSchedule()->paginate($this->perPage());
    }

    public function search($searchQuery)
    {
        $search = "%{$searchQuery}%";

        return $this->getTeachSchedule()
            //->where('name', 'like', $search)
            ->paginate($this->perPage());
    }

    public function findById($id)
    {
        return $this->getTeachSchedule()->find($id);
    }

    public function findBy($key, $value, $operator = '=')
    {
        return $this->getTeachSchedule()->where($key, $operator, $value)->paginate($this->perPage());
    }

    public function delete($id)
    {
        $teach_schedule = $this->findById($id);

        if (!is_null($teach_schedule)) {
            $teach_schedule->delete();

            return true;
        }

        return false;
    }

    public function create(array $data)
    {
        //Date convert
        $data['date'] = DateHelper::sqlDateFormat($data['date']);
        
        $teach_schedule = $this->getModel()->create($data);

        return $teach_schedule;
    }

    public function update(array $data, $id)
    {
        $teach_schedule = $this->findById($id);
        
        //Date convert
        $data['date'] = DateHelper::sqlDateFormat($data['date']);

        return $teach_schedule->update($data);
    }

    public function getTeachSchedule()
    {
        return $this->getModel();
    }

}