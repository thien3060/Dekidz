<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Repositories\Contracts\AssetRepository;

class EloquentAssetRepository implements AssetRepository
{
    public function perPage()
    {
        return config('admin.asset.perpage');
    }

    public function getModel(){
        $model = config('admin.asset.model');
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
        return $this->getAsset()->paginate($this->perPage());
    }

    public function search($searchQuery)
    {
        $search = "%{$searchQuery}%";

        return $this->getAsset()
            ->where('name', 'like', $search)
            ->paginate($this->perPage());
    }

    public function findById($id)
    {
        return $this->getAsset()->find($id);
    }

    public function findBy($key, $value, $operator = '=')
    {
        return $this->getAsset()->where($key, $operator, $value)->paginate($this->perPage());
    }

    public function delete($id)
    {
        $asset = $this->findById($id);

        if (!is_null($asset)) {
            $asset->delete();

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
        $asset = $this->findById($id);
        return $asset->update($data);
    }

    public function getAsset()
    {
        return $this->getModel();
    }

}