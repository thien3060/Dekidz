<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Models\TeachSchedule;
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
        $class = $this->getModel()->create($data);
        if(!empty($class)){
            TeachSchedule::create(['class_id' => $class->id, 'semester' => 1], ['class_id' => $class->id, 'semester' => 2]);
        }
        return $class;
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