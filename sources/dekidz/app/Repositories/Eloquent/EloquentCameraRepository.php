<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Repositories\Contracts\CameraRepository;
use App\Repositories\Contracts\StudentRepository;

class EloquentCameraRepository implements CameraRepository
{
    public function perPage()
    {
        return config('admin.camera.perpage');
    }

    public function getModel(){
        $model = config('admin.camera.model');
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
        return $this->getCamera()->paginate($this->perPage());
    }

    public function search($searchQuery)
    {
        $search = "%{$searchQuery}%";

        return $this->getCamera()
            ->where('name', 'like', $search)
            ->paginate($this->perPage());
    }

    public function findById($id)
    {
        return $this->getCamera()->find($id);
    }

    public function findBy($key, $value, $operator = '=')
    {
        return $this->getCamera()->where($key, $operator, $value)->paginate($this->perPage());
    }

    public function delete($id)
    {
        $camera = $this->findById($id);

        if (!is_null($camera)) {
            $camera->delete();

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
        $camera = $this->findById($id);

        return $camera->update($data);
    }

    public function getCamera()
    {
        return $this->getModel();
    }

}