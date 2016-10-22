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
            $dish->foods()->detach();
            $dish->delete();

            return true;
        }

        return false;
    }

    public function create(array $data)
    {
        $dish = $this->getModel()->create($data);
        for($i = 0; $i < count($data['asset-name']); $i++){
            if($data['asset-name'][$i] != 0){
                $dish->foods()->attach($data['asset-name'][$i], [
                    'price' => $data['asset-price'][$i],
                    'quantity' => $data['asset-quantity'][$i]
                ]);
            }
        }
        return $dish;
    }

    public function update(array $data, $id)
    {
        $dish = $this->findById($id);

        $dish->update($data);
        $dish->foods()->detach();

        for($i = 0; $i < count($data['asset-name']); $i++){
            if($data['asset-name'][$i] != 0){
                if($data['asset-name'][$i] != 0){
                    $dish->foods()->attach($data['asset-name'][$i], [
                        'price' => $data['asset-price'][$i],
                        'quantity' => $data['asset-quantity'][$i]
                    ]);
                }
            }
        }

        return $dish;
    }

    public function getDish()
    {
        return $this->getModel();
    }

}