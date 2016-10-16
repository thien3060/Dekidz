<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Repositories\Contracts\PhysicalInfoRepository;
use App\Repositories\Contracts\StudentRepository;

class EloquentPhysicalInfoRepository implements PhysicalInfoRepository
{
    public function perPage()
    {
        return config('admin.physical_info.perpage');
    }

    public function getModel(){
        $model = config('admin.physical_info.model');
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
        return $this->getPhysicalInfo()->paginate($this->perPage());
    }

    public function search($searchQuery)
    {
        $search = "%{$searchQuery}%";

        return $this->getPhysicalInfo()
            //->where('name', 'like', $search)
            ->paginate($this->perPage());
    }

    public function findById($id)
    {
        return $this->getPhysicalInfo()->find($id);
    }

    public function findBy($key, $value, $operator = '=')
    {
        return $this->getPhysicalInfo()->where($key, $operator, $value)->paginate($this->perPage());
    }

    public function delete($id)
    {
        $physical_info = $this->findById($id);

        if (!is_null($physical_info)) {
            $physical_info->delete();

            return true;
        }

        return false;
    }

    public function create(array $data)
    {
        //Date convert
        //$data['dob'] = DateHelper::sqlDateFormat($data['dob']);

        return $this->getModel()->create($data);
    }

    public function update(array $data, $id)
    {
        $physical_info = $this->findById($id);
        
        //Date convert

        return $physical_info->update($data);
    }

    public function getPhysicalInfo()
    {
        return $this->getModel();
    }

}