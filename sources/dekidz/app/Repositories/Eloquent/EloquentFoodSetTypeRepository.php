<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Repositories\Contracts\FoodSetTypeRepository;

class EloquentFoodSetTypeRepository implements FoodSetTypeRepository
{
    public function perPage()
    {
        return config('admin.foodsettype.perpage');
    }

    public function getModel(){
        $model = config('admin.foodsettype.model');
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
        return $this->getFoodSetType()->paginate($this->perPage());
    }

    public function search($searchQuery)
    {
        $search = "%{$searchQuery}%";

        return $this->getFoodSetType()
            ->where('name', 'like', $search)
            ->paginate($this->perPage());
    }

    public function findById($id)
    {
        return $this->getFoodSetType()->find($id);
    }

    public function findBy($key, $value, $operator = '=')
    {
        return $this->getFoodSetType()->where($key, $operator, $value)->paginate($this->perPage());
    }

    public function delete($id)
    {
        $foodsettype = $this->findById($id);

        if (!is_null($foodsettype)) {
            $foodsettype->delete();

            return true;
        }

        return false;
    }

    public function create(array $data)
    {
        $foodsettype = $this->getModel()->create($data);
        if(isset($foodsettype)){
            $foodsettype->code = config('code.food_set_type').sprintf("%04d", $foodsettype->id);
            $foodsettype->save();
        }
        return $foodsettype;
    }

    public function update(array $data, $id)
    {
        $foodsettype = $this->findById($id);
        return $foodsettype->update($data);
    }

    public function getFoodSetType()
    {
        return $this->getModel();
    }

}