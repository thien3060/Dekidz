<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Repositories\Contracts\FoodGroupRepository;

class EloquentFoodGroupRepository implements FoodGroupRepository
{
    public function perPage()
    {
        return config('admin.foodgroup.perpage');
    }

    public function getModel(){
        $model = config('admin.foodgroup.model');
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
        return $this->getFoodGroup()->paginate($this->perPage());
    }

    public function search($searchQuery)
    {
        $search = "%{$searchQuery}%";

        return $this->getFoodGroup()
            ->where('name', 'like', $search)
            ->paginate($this->perPage());
    }

    public function findById($id)
    {
        return $this->getFoodGroup()->find($id);
    }

    public function findBy($key, $value, $operator = '=')
    {
        return $this->getFoodGroup()->where($key, $operator, $value)->paginate($this->perPage());
    }

    public function delete($id)
    {
        $foodgroup = $this->findById($id);

        if (!is_null($foodgroup)) {
            $foodgroup->delete();

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
        $foodgroup = $this->findById($id);
        return $foodgroup->update($data);
    }

    public function getFoodGroup()
    {
        return $this->getModel();
    }

}