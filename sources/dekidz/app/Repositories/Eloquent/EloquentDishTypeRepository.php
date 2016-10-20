<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Repositories\Contracts\DishTypeRepository;

class EloquentDishTypeRepository implements DishTypeRepository
{
    public function perPage()
    {
        return config('admin.dishtype.perpage');
    }

    public function getModel(){
        $model = config('admin.dishtype.model');
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
        return $this->getDishType()->paginate($this->perPage());
    }

    public function search($searchQuery)
    {
        $search = "%{$searchQuery}%";

        return $this->getDishType()
            ->where('name', 'like', $search)
            ->paginate($this->perPage());
    }

    public function findById($id)
    {
        return $this->getDishType()->find($id);
    }

    public function findBy($key, $value, $operator = '=')
    {
        return $this->getDishType()->where($key, $operator, $value)->paginate($this->perPage());
    }

    public function delete($id)
    {
        $dishtype = $this->findById($id);

        if (!is_null($dishtype)) {
            $dishtype->delete();

            return true;
        }

        return false;
    }

    public function create(array $data)
    {
        $dishtype = $this->getModel()->create($data);
        if(isset($dishtype)){
            $dishtype->code = config('code.dishtypes').sprintf("%04d", $dishtype->id);
            $dishtype->save();
        }
        return $dishtype;
    }

    public function update(array $data, $id)
    {
        $dishtype = $this->findById($id);
        return $dishtype->update($data);
    }

    public function getDishType()
    {
        return $this->getModel();
    }

}