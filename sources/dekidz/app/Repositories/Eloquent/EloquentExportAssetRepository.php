<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Repositories\Contracts\ExportAssetRepository;

class EloquentExportAssetRepository implements ExportAssetRepository
{
    public function perPage()
    {
        return config('admin.export_asset.perpage');
    }

    public function getModel(){
        $model = config('admin.export_asset.model');
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
        return $this->getExportAsset()->paginate($this->perPage());
    }

    public function search($searchQuery)
    {
        $search = "%{$searchQuery}%";

        return $this->getExportAsset()
            //->where('name', 'like', $search)
            ->paginate($this->perPage());
    }

    public function findById($id)
    {
        return $this->getExportAsset()->find($id);
    }

    public function findBy($key, $value, $operator = '=')
    {
        return $this->getExportAsset()->where($key, $operator, $value)->paginate($this->perPage());
    }

    public function delete($id)
    {
        $export_asset = $this->findById($id);

        if (!is_null($export_asset)) {
            $export_asset->foods()->detach();
            $export_asset->delete();

            return true;
        }

        return false;
    }

    public function create(array $data)
    {
        //Date convert
        $data['date'] = DateHelper::sqlDateFormat($data['date']);
        $export_asset = $this->getModel()->create($data);
        for($i = 0; $i < count($data['asset-name']); $i++){
            if($data['asset-name'][$i] != 0){
                $export_asset->foods()->attach($data['asset-name'][$i], [
                    'quantity' => $data['asset-quantity'][$i]
                ]);
            }
        }
        return $export_asset;
    }

    public function update(array $data, $id)
    {
        $export_asset = $this->findById($id);

        //Date convert
        $data['date'] = DateHelper::sqlDateFormat($data['date']);

        $export_asset->update($data);
        $export_asset->foods()->detach();

        for($i = 0; $i < count($data['asset-name']); $i++){
            if($data['asset-name'][$i] != 0){
                $export_asset->foods()->attach($data['asset-name'][$i], [
                    'quantity' => $data['asset-quantity'][$i]
                ]);
            }
        }

        return $export_asset;
    }

    public function getExportAsset()
    {
        return $this->getModel();
    }

}