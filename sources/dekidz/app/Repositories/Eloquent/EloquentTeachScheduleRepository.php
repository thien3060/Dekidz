<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Models\DekidzClass;
use App\Models\Staff;
use App\Models\SubjectTopic;
use App\Repositories\Contracts\SalaryRepository;
use App\Repositories\Contracts\StaffRepository;
use App\Repositories\Contracts\TeachScheduleRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
        //
    }

    public function update(array $data, $id)
    {
        //
    }

    public function updateTeachSchedule($data)
    {
        $class_id = $data['schedule']['class_id'];
        $semester =$data['schedule']['semester'];
        $day = $data['schedule_detail']['day'];
        $period = $data['schedule_detail']['period'];
        $teacher = $data['schedule_detail']['teacher'];
        $lesson = $data['schedule_detail']['lesson'];

        $schedule = $this->getModel()
            ->where('class_id', '=', $class_id)
            ->where('semester', '=', $semester)
            ->first();
        if(empty($schedule)){
            $schedule = $this->getModel()->create(['class_id' => $class_id, 'semester' => $semester]);
        }

        $detail = DB::table('teach_schedules_detail')
            ->where('teach_schedule_id', '=', $schedule->id)
            ->where('day', '=', $day)
            ->where('period', '=', $period);
        if(empty($detail->get())){
            $detail->insert([
                'teach_schedule_id' =>$schedule->id,
                'day' => $day,
                'period' => $period,
                'lesson' => $lesson,
                'teacher' => $teacher,
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
        else{
            $detail->update([
                'teacher' => $teacher,
                'lesson' => $lesson
            ]);
        }
    }

    public function getLesson($data)
    {
        return $this->getModel()
            ->where('teach_schedules.semester', '=', $data['semester'])
            ->where('teach_schedules.class_id', '=', $data['class_id'])
            ->leftJoin('teach_schedules_detail', 'teach_schedules.id', '=', 'teach_schedules_detail.teach_schedule_id')
            ->select('teach_schedules_detail.lesson')->lists('lesson');
    }

    public function getTeachSchedule()
    {
        return $this->getModel();
    }

    public function getTeachScheduleDetail($id, $semester)
    {
        return $this->getModel()
            ->where('class_id', '=', $id)
            ->where('semester', '=', $semester)
            ->leftJoin('teach_schedules_detail', 'teach_schedules.id', '=', 'teach_schedules_detail.teach_schedule_id')
            ->select('day', 'period', 'lesson', 'teacher')
            ->get();
    }
}