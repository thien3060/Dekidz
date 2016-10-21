<?php

namespace App\Repositories\Eloquent;

use App\Helpers\DateHelper;
use App\Repositories\Contracts\SubjectTopicRepository;

class EloquentSubjectTopicRepository implements SubjectTopicRepository
{
    public function perPage()
    {
        return config('admin.subject_topic.perpage');
    }

    public function getModel(){
        $model = config('admin.subject_topic.model');
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
        return $this->getSubjectTopic()->paginate($this->perPage());
    }

    public function search($searchQuery)
    {
        $search = "%{$searchQuery}%";

        return $this->getSubjectTopic()
            ->where('name', 'like', $search)
            ->paginate($this->perPage());
    }

    public function findById($id)
    {
        return $this->getSubjectTopic()->find($id);
    }

    public function findBy($key, $value, $operator = '=')
    {
        return $this->getSubjectTopic()->where($key, $operator, $value)->paginate($this->perPage());
    }

    public function delete($id)
    {
        $subject_topic = $this->findById($id);

        if (!is_null($subject_topic)) {
            $subject_topic->delete();

            return true;
        }

        return false;
    }

    public function create(array $data)
    {
        $subject_topic = $this->getModel()->create($data);

        if(isset($subject_topic)){
            $subject_topic->code = config('code.subject_topics').sprintf("%04d", $subject_topic->id);
            $subject_topic->save();
        }
        
        return $subject_topic;
    }

    public function update(array $data, $id)
    {
        $subject_topic = $this->findById($id);

        return $subject_topic->update($data);
    }

    public function getSubjectTopic()
    {
        return $this->getModel();
    }

}