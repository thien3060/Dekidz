<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Repositories\Contracts\GradeRepository;
use App\Repositories\Contracts\SubjectTopicRepository;

class EloquentGradeRepository implements GradeRepository
{
    public function perPage()
    {
        return config('admin.grade.perpage');
    }

    public function getModel(){
        $model = config('admin.grade.model');
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
        return $this->getGrade()->paginate($this->perPage());
    }

    public function search($searchQuery)
    {
        $search = "%{$searchQuery}%";

        return $this->getGrade()
            ->where('name', 'like', $search)
            ->paginate($this->perPage());
    }

    public function findById($id)
    {
        return $this->getGrade()->find($id);
    }

    public function findBy($key, $value, $operator = '=')
    {
        return $this->getGrade()->where($key, $operator, $value)->paginate($this->perPage());
    }

    public function delete($id)
    {
        $grade = $this->findById($id);

        if (!is_null($grade)) {
            $grade->delete();

            return true;
        }

        return false;
    }

    public function create(array $data)
    {
        $grade = $this->getModel()->create($data);

        if(isset($subject_topic)){
            $grade->code = config('code.grades').sprintf("%04d", $grade->id);
            $grade->save();
        }
        
        return $grade;
    }

    public function update(array $data, $id)
    {
        $grade = $this->findById($id);

        return $grade->update($data);
    }

    public function getGrade()
    {
        return $this->getModel();
    }

}