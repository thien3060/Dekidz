<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Repositories\Contracts\DekidzClassRepository;

class EloquentDekidzClassRepository implements DekidzClassRepository
{
    public function perPage()
    {
        return config('admin.class.perpage');
    }

    public function getModel(){
        $model = config('admin.class.model');
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
        return $this->getDekidzClass()->paginate($this->perPage());
    }

    public function search($searchQuery)
    {
        $search = "%{$searchQuery}%";

        return $this->getDekidzClass()
            ->where('name', 'like', $search)
            ->paginate($this->perPage());
    }

    public function findById($id)
    {
        return $this->getDekidzClass()->find($id);
    }

    public function findBy($key, $value, $operator = '=')
    {
        return $this->getDekidzClass()->where($key, $operator, $value)->paginate($this->perPage());
    }

    public function delete($id)
    {
        $dekidzClass = $this->findById($id);

        if (!is_null($dekidzClass)) {
            $dekidzClass->delete();

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
        $dekidzClass = $this->findById($id);
        return $dekidzClass->update($data);
    }

    public function getDekidzClass()
    {
        return $this->getModel();
    }

}