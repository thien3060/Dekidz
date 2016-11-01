<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Repositories\Contracts\SalaryRepository;
use App\Repositories\Contracts\StaffRepository;
use App\Repositories\Contracts\StaffTypeRepository;

class EloquentStaffTypeRepository implements StaffTypeRepository
{
    public function perPage()
    {
        return config('admin.staff_type.perpage');
    }

    public function getModel(){
        $model = config('admin.staff_type.model');
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
        return $this->getStaffType()->paginate($this->perPage());
    }

    public function search($searchQuery)
    {
        $search = "%{$searchQuery}%";

        return $this->getStaffType()
            ->where('name', 'like', $search)
            ->paginate($this->perPage());
    }

    public function findById($id)
    {
        return $this->getStaffType()->find($id);
    }

    public function findBy($key, $value, $operator = '=')
    {
        return $this->getStaffType()->where($key, $operator, $value)->paginate($this->perPage());
    }

    public function delete($id)
    {
        $staff_type = $this->findById($id);

        if (!is_null($staff_type)) {
            $staff_type->delete();

            return true;
        }

        return false;
    }

    public function create(array $data)
    {
        $staff_type = $this->getModel()->create($data);

        return $staff_type;
    }

    public function update(array $data, $id)
    {
        $staff_type = $this->findById($id);

        return $staff_type->update($data);
    }

    public function getStaffType()
    {
        return $this->getModel();
    }

}