<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Models\DekidzClass;
use App\Models\Staff;
use App\Models\SubjectTopic;
use App\Repositories\Contracts\SalaryRepository;
use App\Repositories\Contracts\StaffRepository;
use App\Repositories\Contracts\TeachScheduleRepository;

class EloquentTeachScheduleRepository implements TeachScheduleRepository
{
    public function perPage()
    {
        return config('admin.teach_schedule.perpage');
    }

    public function getModel(){
        $model = config('admin.teach_schedule.model');
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
        return $this->getTeachSchedule()->paginate($this->perPage());
    }

    public function search($searchQuery)
    {
        $search = "%{$searchQuery}%";

        return $this->getTeachSchedule()
            //->where('name', 'like', $search)
            ->paginate($this->perPage());
    }

    public function findById($id)
    {
        return $this->getTeachSchedule()->find($id);
    }

    public function findBy($key, $value, $operator = '=')
    {
        return $this->getTeachSchedule()->where($key, $operator, $value)->paginate($this->perPage());
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

        $teach_schedule = $this->getModel()->create($data);
        $class = DekidzClass::find($data['class']);
        $morning_lesson = SubjectTopic::find($data['morning_lesson']);
        $afternoon_lesson = SubjectTopic::find($data['afternoon_lesson']);
        $morning_teacher = Staff::find($data['morning_teacher']);
        $afternoon_teacher = Staff::find($data['afternoon_teacher']);

        if($class){
            $teach_schedule->dekidz_class()->associate($class);
        }
        if($morning_lesson){
            $teach_schedule->morning_lesson()->associate($morning_lesson);
        }
        if($afternoon_lesson){
            $teach_schedule->afternoon_lesson()->associate($afternoon_lesson);
        }
        if($morning_teacher){
            $teach_schedule->morning_teacher()->associate($morning_teacher);
        }
        if($afternoon_teacher){
            $teach_schedule->afternoon_teacher()->associate($afternoon_teacher);
        }

        return $teach_schedule->save();
    }

    public function update(array $data, $id)
    {
        $teach_schedule = $this->findById($id);
        
        //Date convert
        $data['date'] = DateHelper::sqlDateFormat($data['date']);

        $class = DekidzClass::find($data['class']);
        $morning_lesson = SubjectTopic::find($data['morning_lesson']);
        $afternoon_lesson = SubjectTopic::find($data['afternoon_lesson']);
        $morning_teacher = Staff::find($data['morning_teacher']);
        $afternoon_teacher = Staff::find($data['afternoon_teacher']);

        if($class){
            $teach_schedule->dekidz_class()->associate($class);
        }
        if($morning_lesson){
            $teach_schedule->morning_lesson()->associate($morning_lesson);
        }
        if($afternoon_lesson){
            $teach_schedule->afternoon_lesson()->associate($afternoon_lesson);
        }
        if($morning_teacher){
            $teach_schedule->morning_teacher()->associate($morning_teacher);
        }
        if($afternoon_teacher){
            $teach_schedule->afternoon_teacher()->associate($afternoon_teacher);
        }

        return $teach_schedule->update($data);
    }

    public function getTeachSchedule()
    {
        return $this->getModel();
    }

    public function getTeachScheduleDetail($id, $semester)
    {
        return $this->getModel()
            ->leftJoin('teach_schedules_detail', 'teach_schedules.id', '=', 'teach_schedules_detail.teach_schedule_id')
            ->select('day', 'period', 'lesson', 'teacher')
            ->get();
    }
}