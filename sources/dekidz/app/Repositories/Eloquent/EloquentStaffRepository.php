<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Repositories\Contracts\StaffRepository;

class EloquentStaffRepository implements StaffRepository
{
    public function perPage()
    {
        return config('admin.staff.perpage');
    }

    public function getModel(){
        $model = config('admin.staff.model');
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
        return $this->getStaff()->paginate($this->perPage());
    }

    public function search($searchQuery)
    {
        $search = "%{$searchQuery}%";

        return $this->getStaff()
            ->where('name', 'like', $search)
            ->paginate($this->perPage());
    }

    public function findById($id)
    {
        return $this->getStaff()->find($id);
    }

    public function findBy($key, $value, $operator = '=')
    {
        return $this->getStaff()->where($key, $operator, $value)->paginate($this->perPage());
    }

    public function delete($id)
    {
        $staff = $this->findById($id);

        if (!is_null($staff)) {
            $staff->delete();

            return true;
        }

        return false;
    }

    public function create(array $data)
    {
        //Date convert
        $data['dob'] = DateHelper::sqlDateFormat($data['dob']);
        $data['date_range'] = DateHelper::sqlDateFormat($data['date_range']);
        $data['start_day'] = DateHelper::sqlDateFormat($data['start_day']);

        return $this->getModel()->create($data);
    }

    public function update(array $data, $id)
    {
        $student = $this->findById($id);
        
        //Date convert
        $data['dob'] = DateHelper::sqlDateFormat($data['dob']);
        $data['date_range'] = DateHelper::sqlDateFormat($data['date_range']);
        $data['start_day'] = DateHelper::sqlDateFormat($data['start_day']);

        return $student->update($data);
    }

    public function getStaff()
    {
        return $this->getModel();
    }

}