<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Repositories\Contracts\FoodRepository;

class EloquentFoodRepository implements FoodRepository
{
    public function perPage()
    {
        return config('admin.food.perpage');
    }

    public function getModel(){
        $model = config('admin.food.model');
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
        return $this->getFood()->paginate($this->perPage());
    }

    public function search($searchQuery)
    {
        $search = "%{$searchQuery}%";

        return $this->getFood()
            ->where('name', 'like', $search)
            ->paginate($this->perPage());
    }

    public function findById($id)
    {
        return $this->getFood()->find($id);
    }

    public function findBy($key, $value, $operator = '=')
    {
        return $this->getFood()->where($key, $operator, $value)->paginate($this->perPage());
    }

    public function delete($id)
    {
        $food = $this->findById($id);

        if (!is_null($food)) {
            $food->delete();

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
        $food = $this->findById($id);
        return $food->update($data);
    }

    public function getFood()
    {
        return $this->getModel();
    }

}