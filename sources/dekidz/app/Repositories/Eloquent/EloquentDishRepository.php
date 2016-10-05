<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Repositories\Contracts\DishRepository;

class EloquentDishRepository implements DishRepository
{
    public function perPage()
    {
        return config('admin.dish.perpage');
    }

    public function getModel(){
        $model = config('admin.dish.model');
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
        return $this->getDish()->paginate($this->perPage());
    }

    public function search($searchQuery)
    {
        $search = "%{$searchQuery}%";

        return $this->getDish()
            ->where('name', 'like', $search)
            ->paginate($this->perPage());
    }

    public function findById($id)
    {
        return $this->getDish()->find($id);
    }

    public function findBy($key, $value, $operator = '=')
    {
        return $this->getDish()->where($key, $operator, $value)->paginate($this->perPage());
    }

    public function delete($id)
    {
        $dish = $this->findById($id);

        if (!is_null($dish)) {
            $dish->delete();

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
        $dish = $this->findById($id);
        return $dish->update($data);
    }

    public function getDish()
    {
        return $this->getModel();
    }

}