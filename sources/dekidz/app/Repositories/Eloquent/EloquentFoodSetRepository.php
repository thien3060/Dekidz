<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Repositories\Contracts\FoodSetRepository;

class EloquentFoodSetRepository implements FoodSetRepository
{
    public function perPage()
    {
        return config('admin.foodset.perpage');
    }

    public function getModel(){
        $model = config('admin.foodset.model');
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
        return $this->getFoodSet()->paginate($this->perPage());
    }

    public function search($searchQuery)
    {
        $search = "%{$searchQuery}%";

        return $this->getFoodSet()
            ->where('name', 'like', $search)
            ->paginate($this->perPage());
    }

    public function findById($id)
    {
        return $this->getFoodSet()->find($id);
    }

    public function findBy($key, $value, $operator = '=')
    {
        return $this->getFoodSet()->where($key, $operator, $value)->paginate($this->perPage());
    }

    public function delete($id)
    {
        $foodset = $this->findById($id);

        if (!is_null($foodset)) {
            $foodset->delete();

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
        $foodset = $this->findById($id);
        return $foodset->update($data);
    }

    public function getFoodSet()
    {
        return $this->getModel();
    }

}