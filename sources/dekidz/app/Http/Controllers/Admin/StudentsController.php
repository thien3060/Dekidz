<?php

namespace App\Http\Controllers\Admin;

use App\Validation\Student\CreateRequest;
use App\Validation\Student\UpdateRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Pingpong\Admin\Uploader\ImageUploader;
use Illuminate\Support\Facades\Validator;

class StudentsController extends BaseController
{
    protected $students;

    /**
     * @var ImageUploader
     */
    protected $uploader;

    public function __construct(ImageUploader $uploader)
    {
        //$this->middleware('permission:manage_students');

        $this->uploader = $uploader;

        $this->repository = $this->getRepository();
    }

    /**
     * Get repository instance.
     *
     * @return mixed
     */
    public function getRepository()
    {
        $repository = 'App\Repositories\Contracts\StudentRepository';
        return app($repository);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = $this->repository->allOrSearch(Input::get('q'));

        $no = $students->firstItem();

        return $this->view('pages.students.index', compact('students', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        $data = $request->all();

        unset($data['picture']);

        if (\Input::hasFile('picture')) {
            // upload image
            $this->uploader->upload('picture')->save('images/students');

            $data['picture'] = $this->uploader->getFilename();
        }

        $this->repository->create($data);

        return $this->redirect('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $student = $this->repository->findById($id);

            return $this->view('pages.students.edit', compact('student'));
        } catch (ModelNotFoundException $e) {
            return $this->redirectNotFound();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        try {
            $data = $request->all();

            unset($data['picture']);
            if (\Input::hasFile('picture')) {
                $this->uploader->upload('picture')->save('images/students');

                $data['picture'] = $this->uploader->getFilename();
            }

            $this->repository->update($data, $id);

            return $this->redirect('students.index');
        } catch (ModelNotFoundException $e) {
            return $this->redirectNotFound();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->repository->delete($id);

            return $this->redirect('students.index');
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
        return $this->redirect('students.index')
            ->withFlashMessage('Student not found!')
            ->withFlashType('danger');
    }
}
