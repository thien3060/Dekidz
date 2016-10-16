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
            //->where('name', 'like', $search)
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
            $foodset->dishes()->detach();
            $foodset->delete();

            return true;
        }

        return false;
    }

    public function create(array $data)
    {
        $foodset = $this->getModel()->create($data);
        for($i = 0; $i < count($data['asset-name']); $i++){
            if($data['asset-name'][$i] != 0){
                $foodset->dishes()->attach($data['asset-name'][$i], [
                    'price' => $data['asset-price'][$i],
                    'quantity' => $data['asset-quantity'][$i]
                ]);
            }
        }
        return $foodset;
    }

    public function update(array $data, $id)
    {
        $foodset = $this->findById($id);
        
        //Date convert
        $data['date'] = DateHelper::sqlDateFormat($data['date']);

        $foodset->update($data);
        $foodset->dishes()->detach();

        for($i = 0; $i < count($data['asset-name']); $i++){
            if($data['asset-name'][$i] != 0){
                if($data['asset-name'][$i] != 0){
                    $foodset->dishes()->attach($data['asset-name'][$i], [
                        'price' => $data['asset-price'][$i],
                        'quantity' => $data['asset-quantity'][$i]
                    ]);
                }
            }
        }

        return $foodset;
    }

    public function getFoodSet()
    {
        return $this->getModel();
    }

}