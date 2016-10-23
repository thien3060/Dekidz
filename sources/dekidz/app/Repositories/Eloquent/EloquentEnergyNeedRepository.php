<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Repositories\Contracts\EnergyNeedRepository;

class EloquentEnergyNeedRepository implements EnergyNeedRepository
{
    public function perPage()
    {
        return config('admin.energy_need.perpage');
    }

    public function getModel(){
        $model = config('admin.energy_need.model');
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
        return $this->getEnergyNeed()->paginate($this->perPage());
    }

    public function search($searchQuery)
    {
        $search = "%{$searchQuery}%";

        return $this->getEnergyNeed()
            ->where('name', 'like', $search)
            ->paginate($this->perPage());
    }

    public function findById($id)
    {
        return $this->getEnergyNeed()->find($id);
    }

    public function findBy($key, $value, $operator = '=')
    {
        return $this->getEnergyNeed()->where($key, $operator, $value)->paginate($this->perPage());
    }

    public function delete($id)
    {
        $energyneed = $this->findById($id);

        if (!is_null($energyneed)) {
            $energyneed->delete();

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
        $energyneed = $this->findById($id);
        return $energyneed->update($data);
    }

    public function getEnergyNeed()
    {
        return $this->getModel();
    }

}