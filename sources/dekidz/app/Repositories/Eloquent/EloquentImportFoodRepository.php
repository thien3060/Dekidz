<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Repositories\Contracts\ImportFoodRepository;

class EloquentImportFoodRepository implements ImportFoodRepository
{
    public function perPage()
    {
        return config('admin.import.perpage');
    }

    public function getModel(){
        $model = config('admin.import.model');
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
        return $this->getImport()->paginate($this->perPage());
    }

    public function search($searchQuery)
    {
        $search = "%{$searchQuery}%";

        return $this->getImport()
            //->where('name', 'like', $search)
            ->paginate($this->perPage());
    }

    public function findById($id)
    {
        return $this->getImport()->find($id);
    }

    public function findBy($key, $value, $operator = '=')
    {
        return $this->getImport()->where($key, $operator, $value)->paginate($this->perPage());
    }

    public function delete($id)
    {
        $import = $this->findById($id);

        if (!is_null($import)) {
            $import->foods()->detach();
            $import->delete();

            return true;
        }

        return false;
    }

    public function create(array $data)
    {
        //Date convert
        $data['date'] = DateHelper::sqlDateFormat($data['date']);
        $data['is_food'] = 1;
        $import = $this->getModel()->create($data);
        for($i = 0; $i < count($data['asset-name']); $i++){
            if($data['asset-name'][$i] != 0){
                $import->foods()->attach($data['asset-name'][$i], [
                    'price' => $data['asset-cost'][$i],
                    'quantity' => $data['asset-quantity'][$i]
                ]);
            }
        }
        return $import;
    }

    public function update(array $data, $id)
    {
        $import = $this->findById($id);
        
        //Date convert
        $data['date'] = DateHelper::sqlDateFormat($data['date']);
        $data['is_food'] = 1;

        $import->update($data);
        $import->foods()->detach();

        for($i = 0; $i < count($data['asset-name']); $i++){
            if($data['asset-name'][$i] != 0){
                $import->foods()->attach($data['asset-name'][$i], [
                    'price' => $data['asset-price'][$i],
                    'quantity' => $data['asset-quantity'][$i]
                ]);
            }
        }

        return $import;
    }

    public function getImport()
    {
        return $this->getModel()->where('is_food', '=', 1);
    }

}