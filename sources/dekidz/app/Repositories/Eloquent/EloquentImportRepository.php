<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Repositories\Contracts\ImportRepository;

class EloquentImportRepository implements ImportRepository
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
            $import->delete();

            return true;
        }

        return false;
    }

    public function create(array $data)
    {
        //Date convert
        $data['date'] = DateHelper::sqlDateFormat($data['date']);

        return $this->getModel()->create($data);
    }

    public function update(array $data, $id)
    {
        $student = $this->findById($id);
        
        //Date convert
        $data['date'] = DateHelper::sqlDateFormat($data['date']);

        return $student->update($data);
    }

    public function getImport()
    {
        return $this->getModel();
    }

}