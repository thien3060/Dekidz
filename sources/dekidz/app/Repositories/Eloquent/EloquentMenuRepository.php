<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Models\DekidzClass;
use App\Models\Staff;
use App\Models\SubjectTopic;
use App\Repositories\Contracts\MenuRepository;
use App\Repositories\Contracts\SalaryRepository;
use App\Repositories\Contracts\StaffRepository;
use App\Repositories\Contracts\TeachScheduleRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class EloquentMenuRepository implements MenuRepository
{
    public function perPage()
    {
        return config('admin.menu.perpage');
    }

    public function getModel(){
        $model = config('admin.menu.model');
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
        return $this->getMenu()->paginate($this->perPage());
    }

    public function search($searchQuery)
    {
        $search = "%{$searchQuery}%";

        return $this->getMenu()
            //->where('name', 'like', $search)
            ->paginate($this->perPage());
    }

    public function findById($id)
    {
        return $this->getMenu()->find($id);
    }

    public function findBy($key, $value, $operator = '=')
    {
        return $this->getMenu()->where($key, $operator, $value)->paginate($this->perPage());
    }

    public function delete($id)
    {
        $teach_schedule = $this->findById($id);

        if (!is_null($teach_schedule)) {
            $teach_schedule->delete();

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
        $menu = $this->findById($id);

        //Date convert
        $data['date'] = DateHelper::sqlDateFormat($data['date']);

        return $menu->update($data);
    }

    public function getMenu()
    {
        return $this->getModel();
    }
}