<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Repositories\Contracts\LessonRepository;

class EloquentLessonRepository implements LessonRepository
{
    public function perPage()
    {
        return config('admin.lesson.perpage');
    }

    public function getModel(){
        $model = config('admin.lesson.model');
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
        return $this->getLesson()->paginate($this->perPage());
    }

    public function search($searchQuery)
    {
        $search = "%{$searchQuery}%";

        return $this->getLesson()
            ->where('name', 'like', $search)
            ->paginate($this->perPage());
    }

    public function findById($id)
    {
        return $this->getLesson()->find($id);
    }

    public function findBy($key, $value, $operator = '=')
    {
        return $this->getLesson()->where($key, $operator, $value)->paginate($this->perPage());
    }

    public function delete($id)
    {
        $lesson = $this->findById($id);

        if (!is_null($lesson)) {
            $lesson->delete();

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
        $lesson = $this->findById($id);
        return $lesson->update($data);
    }

    public function getLesson()
    {
        return $this->getModel();
    }

}