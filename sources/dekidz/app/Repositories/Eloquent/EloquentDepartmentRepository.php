<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Repositories\Contracts\DepartmentRepository;
use App\Repositories\Contracts\StaffRepository;

class EloquentDepartmentRepository implements DepartmentRepository
{
    public function perPage()
    {
        return config('admin.department.perpage');
    }

    public function getModel(){
        $model = config('admin.department.model');
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
        return $this->getDepartment()->paginate($this->perPage());
    }

    public function search($searchQuery)
    {
        $search = "%{$searchQuery}%";

        return $this->getDepartment()
            ->where('name', 'like', $search)
            ->paginate($this->perPage());
    }

    public function findById($id)
    {
        return $this->getDepartment()->find($id);
    }

    public function findBy($key, $value, $operator = '=')
    {
        return $this->getDepartment()->where($key, $operator, $value)->paginate($this->perPage());
    }

    public function delete($id)
    {
        $department = $this->findById($id);

        if (!is_null($department)) {
            $department->delete();

            return true;
        }

        return false;
    }

    public function create(array $data)
    {
        return $this->getModel()->create($data);
    }

    public function update(array $data, $id)
    {
        $department = $this->findById($id);
        
        return $department->update($data);
    }

    public function getDepartment()
    {
        return $this->getModel();
    }

}