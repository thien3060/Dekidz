<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Repositories\Contracts\ExportRepository;
use Illuminate\Support\Facades\DB;

class EloquentExportRepository implements ExportRepository
{
    public function perPage()
    {
        return config('admin.export.perpage');
    }

    public function getModel(){
        $model = config('admin.export.model');
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
        return $this->getExport()->paginate($this->perPage());
    }

    public function search($searchQuery)
    {
        $search = "%{$searchQuery}%";

        return $this->getExport()
            //->where('name', 'like', $search)
            ->paginate($this->perPage());
    }

    public function findById($id)
    {
        return $this->getExport()->find($id);
    }

    public function findBy($key, $value, $operator = '=')
    {
        return $this->getExport()->where($key, $operator, $value)->paginate($this->perPage());
    }

    public function delete($id)
    {
        $export = $this->findById($id);

        if (!is_null($export)) {
            $export->foods()->detach();
            $export->delete();

            return true;
        }

        return false;
    }

    public function create(array $data)
    {
        //Date convert
        $data['date'] = DateHelper::sqlDateFormat($data['date']);
        $export = $this->getModel()->create($data);
        for($i = 0; $i < count($data['asset-name']); $i++){
            if($data['asset-name'][$i] != 0){
                $export->foods()->attach($data['asset-name'][$i], [
                    'quantity' => $data['asset-quantity'][$i]
                ]);
                DB::table('foods')->where('id', $data['asset-name'][$i])->decrement('quantity', $data['asset-quantity'][$i]);
            }
        }
        return $export;
    }

    public function update(array $data, $id)
    {
        $export = $this->findById($id);
        
        //Date convert
        $data['date'] = DateHelper::sqlDateFormat($data['date']);

        $export->update($data);
        $export->foods()->detach();

        for($i = 0; $i < count($data['asset-name']); $i++){
            if($data['asset-name'][$i] != 0){
                $export->foods()->attach($data['asset-name'][$i], [
                    'quantity' => $data['asset-quantity'][$i]
                ]);
            }
        }

        return $export;
    }

    public function getExport()
    {
        return $this->getModel();
    }

}