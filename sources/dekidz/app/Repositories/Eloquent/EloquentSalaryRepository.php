<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Repositories\Contracts\SalaryRepository;
use App\Repositories\Contracts\StaffRepository;

class EloquentSalaryRepository implements SalaryRepository
{
    public function perPage()
    {
        return config('admin.salary.perpage');
    }

    public function getModel(){
        $model = config('admin.salary.model');
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
        return $this->getSalary()->paginate($this->perPage());
    }

    public function search($searchQuery)
    {
        $search = "%{$searchQuery}%";

        return $this->getSalary()
            //->where('name', 'like', $search)
            ->paginate($this->perPage());
    }

    public function findById($id)
    {
        return $this->getSalary()->find($id);
    }

    public function findBy($key, $value, $operator = '=')
    {
        return $this->getSalary()->where($key, $operator, $value)->paginate($this->perPage());
    }

    public function delete($id)
    {
        $salary = $this->findById($id);

        if (!is_null($salary)) {
            $salary->delete();

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
        $salary = $this->findById($id);

        return $salary->update($data);
    }

    public function getSalary()
    {
        return $this->getModel();
    }

}