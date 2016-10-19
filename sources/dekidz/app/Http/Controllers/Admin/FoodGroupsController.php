<?php

namespace App\Http\Controllers\Admin;

use App\Validation\FoodGroup\CreateRequest;
use App\Validation\FoodGroup\UpdateRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class FoodGroupsController extends BaseController
{
    protected $foodgroups;

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
        $repository = 'App\Repositories\Contracts\FoodGroupRepository';
        return app($repository);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foodgroups = $this->repository->allOrSearch(Input::get('q'));

        $no = $foodgroups->firstItem();

        return $this->view('pages.foodgroups.index', compact('foodgroups', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.foodgroups.create');
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

        /*unset($data['image']);

        if (\Input::hasFile('image')) {
            // upload image
            $this->uploader->upload('image')->save('images/articles');

            $data['image'] = $this->uploader->getFilename();
        }

        $data['user_id'] = \Auth::id();*/
        $this->repository->create($data);

        return $this->redirect('foodgroups.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $foodgroup = $this->repository->findById($id);

            return $this->view('pages.foodgroups.show', compact('foodgroup'));
        } catch (ModelNotFoundException $e) {
            return $this->redirectNotFound();
        }
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
            $foodgroup = $this->repository->findById($id);

            return $this->view('pages.foodgroups.edit', compact('foodgroup'));
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

            $this->repository->update($data, $id);

            return $this->redirect('foodgroups.index');
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

            return $this->redirect('foodgroups.index');
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
        return $this->redirect('foodgroups.index')
            ->withFlashMessage('Foodgroup not found!')
            ->withFlashType('danger');
    }
}
