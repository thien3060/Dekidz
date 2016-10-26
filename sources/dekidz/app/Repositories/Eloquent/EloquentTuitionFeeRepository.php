<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Repositories\Contracts\TuitionFeeRepository;

class EloquentTuitionFeeRepository implements TuitionFeeRepository
{
    public function perPage()
    {
        return config('admin.tuition_fee.perpage');
    }

    public function getModel(){
        $model = config('admin.tuition_fee.model');
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
        return $this->getTuitionFee()->paginate($this->perPage());
    }

    public function search($searchQuery)
    {
        $search = "%{$searchQuery}%";

        return $this->getTuitionFee()
            ->where('name', 'like', $search)
            ->paginate($this->perPage());
    }

    public function findById($id)
    {
        return $this->getTuitionFee()->find($id);
    }

    public function findBy($key, $value, $operator = '=')
    {
        return $this->getTuitionFee()->where($key, $operator, $value)->paginate($this->perPage());
    }

    public function delete($id)
    {
        $tuition_fee = $this->findById($id);

        if (!is_null($tuition_fee)) {
            $tuition_fee->delete();

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
        $tuition_fee = $this->findById($id);
        return $tuition_fee->update($data);
    }

    public function getTuitionFee()
    {
        return $this->getModel();
    }

}