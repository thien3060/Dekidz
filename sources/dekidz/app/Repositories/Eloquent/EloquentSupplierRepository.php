<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Repositories\Contracts\SupplierRepository;

class EloquentSupplierRepository implements SupplierRepository
{
    public function perPage()
    {
        return config('admin.supplier.perpage');
    }

    public function getModel(){
        $model = config('admin.supplier.model');
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
        return $this->getSupplier()->paginate($this->perPage());
    }

    public function search($searchQuery)
    {
        $search = "%{$searchQuery}%";

        return $this->getSupplier()
            ->where('name', 'like', $search)
            ->paginate($this->perPage());
    }

    public function findById($id)
    {
        return $this->getSupplier()->find($id);
    }

    public function findBy($key, $value, $operator = '=')
    {
        return $this->getSupplier()->where($key, $operator, $value)->paginate($this->perPage());
    }

    public function delete($id)
    {
        $supplier = $this->findById($id);

        if (!is_null($supplier)) {
            $supplier->delete();

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
        $supplier = $this->findById($id);
        return $supplier->update($data);
    }

    public function getSupplier()
    {
        return $this->getModel();
    }

}