<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Repositories\Contracts\RemOutRepository;
use App\Repositories\Contracts\StaffRepository;

class EloquentRemOutRepository implements RemOutRepository
{
    public function perPage()
    {
        return config('admin.rem_out.perpage');
    }

    public function getModel(){
        $model = config('admin.rem_out.model');
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
        return $this->getRemOut()->paginate($this->perPage());
    }

    public function search($searchQuery)
    {
        $search = "%{$searchQuery}%";

        return $this->getRemOut()
            ->where('name', 'like', $search)
            ->paginate($this->perPage());
    }

    public function findById($id)
    {
        return $this->getRemOut()->find($id);
    }

    public function findBy($key, $value, $operator = '=')
    {
        return $this->getRemOut()->where($key, $operator, $value)->paginate($this->perPage());
    }

    public function delete($id)
    {
        $rem_out = $this->findById($id);

        if (!is_null($rem_out)) {
            $rem_out->delete();

            return true;
        }

        return false;
    }

    public function create(array $data)
    {
        //Date convert
        $data['date'] = DateHelper::sqlDateFormat($data['date']);
        $rem_out = $this->getModel()->create($data);
        if(isset($rem_out)){
            $rem_out->code = config('code.rem_out').sprintf("%04d", $rem_out->id);
            $rem_out->save();
        }

        return $rem_out;
    }

    public function update(array $data, $id)
    {
        $rem_out = $this->findById($id);
        
        //Date convert
        $data['date'] = DateHelper::sqlDateFormat($data['date']);
        
        return $rem_out->update($data);
    }

    public function getRemOut()
    {
        return $this->getModel();
    }

}