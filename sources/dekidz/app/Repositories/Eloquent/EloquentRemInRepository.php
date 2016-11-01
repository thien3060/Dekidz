<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Repositories\Contracts\RemInRepository;
use App\Repositories\Contracts\StaffRepository;

class EloquentRemInRepository implements RemInRepository
{
    public function perPage()
    {
        return config('admin.rem_in.perpage');
    }

    public function getModel(){
        $model = config('admin.rem_in.model');
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
        return $this->getRemIn()->paginate($this->perPage());
    }

    public function search($searchQuery)
    {
        $search = "%{$searchQuery}%";

        return $this->getRemIn()
            ->where('name', 'like', $search)
            ->paginate($this->perPage());
    }

    public function findById($id)
    {
        return $this->getRemIn()->find($id);
    }

    public function findBy($key, $value, $operator = '=')
    {
        return $this->getRemIn()->where($key, $operator, $value)->paginate($this->perPage());
    }

    public function delete($id)
    {
        $rem_in = $this->findById($id);

        if (!is_null($rem_in)) {
            $rem_in->delete();

            return true;
        }

        return false;
    }

    public function create(array $data)
    {
        //Date convert
        $data['date'] = DateHelper::sqlDateFormat($data['date']);
        $rem_in = $this->getModel()->create($data);
        if(isset($rem_in)){
            $rem_in->code = config('code.rem_in').sprintf("%04d", $rem_in->id);
            $rem_in->save();
        }

        return $rem_in;
    }

    public function update(array $data, $id)
    {
        $rem_in = $this->findById($id);
        
        //Date convert
        $data['date'] = DateHelper::sqlDateFormat($data['date']);

        return $rem_in->update($data);
    }

    public function getRemIn()
    {
        return $this->getModel();
    }

}