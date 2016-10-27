<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\DateHelper;
use App\Validation\TeachSchedule\CreateRequest;
use App\Validation\TeachSchedule\UpdateRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class TeachSchedulesController extends BaseController
{
    protected $teach_schedule;
    protected $repository;

    public function __construct()
    {
        $this->repository = $this->getRepository();
    }

    /**
     * Get repository instance.
     *
     * @return mixed
     */
    public function getRepository()
    {
        $repository = 'App\Repositories\Contracts\TeachScheduleRepository';
        return app($repository);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teach_schedules = $this->repository->allOrSearch(Input::get('q'));
        $schedules = $this->repository->getTeachScheduleDetail(1, 1);

        $no = $teach_schedules->firstItem();

        return $this->view('pages.teach_schedules.index', compact('teach_schedules', 'no', 'schedules'));
    }
    
    /**
     * Display the specified resource.
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function detail(Request $request)
    {
        $id = $request->input('id');
        $semester = $request->input('semester');
        $schedules = $this->repository->getTeachScheduleDetail($id, $semester);
        return $schedules;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request)
    {
        try {
            return $this->repository->updateTeachSchedule($request->all());
        } catch (ModelNotFoundException $e) {
            return $this->redirectNotFound();
        }
    }
    
    /**
     * Redirect not found.
     *
     * @return Response
     */
    protected function redirectNotFound()
    {
        return $this->redirect('teach_schedules.index')
            ->withFlashMessage('Teach schedule not found!')
            ->withFlashType('danger');
    }
}
