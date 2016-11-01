<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Repositories\Contracts\MaintenanceBallotRepository;

class EloquentMaintenanceBallotRepository implements MaintenanceBallotRepository
{
    public function perPage()
    {
        return config('admin.maintenance_ballot.perpage');
    }

    public function getModel(){
        $model = config('admin.maintenance_ballot.model');
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
        return $this->getMaintenanceBallot()->paginate($this->perPage());
    }

    public function search($searchQuery)
    {
        $search = "%{$searchQuery}%";

        return $this->getMaintenanceBallot()
            //->where('name', 'like', $search)
            ->paginate($this->perPage());
    }

    public function findById($id)
    {
        return $this->getMaintenanceBallot()->find($id);
    }

    public function findBy($key, $value, $operator = '=')
    {
        return $this->getMaintenanceBallot()->where($key, $operator, $value)->paginate($this->perPage());
    }

    public function delete($id)
    {
        $maintenance_ballot = $this->findById($id);

        if (!is_null($maintenance_ballot)) {
            $maintenance_ballot->foods()->detach();
            $maintenance_ballot->delete();

            return true;
        }

        return false;
    }

    public function create(array $data)
    {
        //Date convert
        $data['date'] = DateHelper::sqlDateFormat($data['date']);
        $maintenance_ballot = $this->getModel()->create($data);
        for($i = 0; $i < count($data['asset-name']); $i++){
            if($data['asset-name'][$i] != 0){
                $maintenance_ballot->foods()->attach($data['asset-name'][$i], [
                    'quantity' => $data['asset-quantity'][$i],
                    'status' => $data['asset-status'][$i]
                ]);
            }
        }
        return $maintenance_ballot;
    }

    public function update(array $data, $id)
    {
        $maintenance_ballot = $this->findById($id);

        //Date convert
        $data['date'] = DateHelper::sqlDateFormat($data['date']);

        $maintenance_ballot->update($data);
        $maintenance_ballot->foods()->detach();

        for($i = 0; $i < count($data['asset-name']); $i++){
            if($data['asset-name'][$i] != 0){
                $maintenance_ballot->foods()->attach($data['asset-name'][$i], [
                    'quantity' => $data['asset-quantity'][$i],
                    'status' => $data['asset-status'][$i]
                ]);
            }
        }

        return $maintenance_ballot;
    }

    public function getMaintenanceBallot()
    {
        return $this->getModel();
    }

}