<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Models\DekidzClass;
use App\Repositories\Contracts\StudentRepository;
use App\Repositories\Contracts\StudyResultRepository;
use Illuminate\Support\Facades\DB;

class EloquentStudyResultRepository implements StudyResultRepository
{
    public function perPage()
    {
        return config('admin.study_result.perpage');
    }

    public function getModel(){
        $model = config('admin.study_result.model');
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
        return $this->getStudyResult()->paginate($this->perPage());
    }

    public function search($searchQuery)
    {
        $search = "%{$searchQuery}%";

        return $this->getStudyResult()
            //->where('name', 'like', $search)
            ->paginate($this->perPage());
    }

    public function findById($id)
    {
        return $this->getStudyResult()->find($id);
    }

    public function findBy($key, $value, $operator = '=')
    {
        return $this->getStudyResult()->where($key, $operator, $value)->paginate($this->perPage());
    }

    function getDetail($data)
    {
        $study_result = $this->findDetail($data);
        if(is_null($study_result)){
            $study_result = $this->getModel()->create($data);
        }

        $result = DB::table('class_detail')
            ->where('class_id', '=', $study_result->class_id)
            ->leftJoin('study_result_detail', function ($query) use ($study_result){
                $query->on('study_result_detail.student_id', '=', 'class_detail.student_id')
                    ->where('study_result_detail.study_result_id', '=', $study_result->id);
            })
            ->select('class_detail.student_id', 'study_result_detail.point')
            ->get();

        return $result;
    }

    function updateDetail($data){
        $study_result = $this->findDetail($data);
        $insert = [];
        if(!is_null($data['student_id'])){
            foreach ($data['student_id'] as $key => $value){
                $insert[] = ['study_result_id' => $study_result->id, 'student_id' => $value, 'point' => $data['point'][$key]];
            }
        }

        if(!is_null($study_result)){
            DB::table('study_result_detail')->where('study_result_id', '=', $study_result->id)->delete();
            DB::table('study_result_detail')->insert($insert);
        }

        return $data;
    }

    public function delete($id)
    {
        $study_result = $this->findById($id);

        if (!is_null($study_result)) {
            $study_result->delete();

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
        $study_result = $this->findById($id);

        return $study_result->update($data);
    }

    public function getStudyResult()
    {
        return $this->getModel();
    }

    public function findDetail($data){
        return $this->getModel()
            ->where('class_id', '=', $data['class_id'])
            ->where('semester', '=', $data['semester'])
            ->where('lesson_id', '=', $data['lesson_id'])
            ->first();
    }
}