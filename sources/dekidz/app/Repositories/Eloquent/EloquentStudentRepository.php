<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\StudentRepository;

class EloquentStudentRepository implements StudentRepository
{
    public function perPage()
    {
        return config('admin.student.perpage');
    }

    public function getModel(){
        $model = config('admin.student.model');
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
        return $this->getStudent()->paginate($this->perPage());
    }

    public function search($searchQuery)
    {
        $search = "%{$searchQuery}%";

        return $this->getStudent()
            ->where('name', 'like', $search)
            ->paginate($this->perPage());
    }

    public function findById($id)
    {
        return $this->getStudent()->find($id);
    }

    public function findBy($key, $value, $operator = '=')
    {
        return $this->getStudent()->where($key, $operator, $value)->paginate($this->perPage());
    }

    public function delete($id)
    {
        $student = $this->findById($id);

        if (!is_null($student)) {
            $student->delete();

            return true;
        }

        return false;
    }

    public function create(array $data)
    {
        return $this->getModel()->create($data);
    }

    public function getStudent()
    {
        return $this->getModel();
    }

}