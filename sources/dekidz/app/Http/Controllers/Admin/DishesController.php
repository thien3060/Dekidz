<?php

namespace App\Http\Controllers\Admin;

use App\Validation\Dish\CreateRequest;
use App\Validation\Dish\UpdateRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class DishesController extends BaseController
{
    protected $dishes;

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
        $repository = 'App\Repositories\Contracts\DishRepository';
        return app($repository);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dishes = $this->repository->allOrSearch(Input::get('q'));

        $no = $dishes->firstItem();

        return $this->view('pages.dishes.index', compact('dishes', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.dishes.create');
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

        return $this->redirect('dishes.index');
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
            $dish = $this->repository->findById($id);

            return $this->view('pages.dishes.edit', compact('dish'));
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

            return $this->redirect('dishes.index');
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

            return $this->redirect('dishes.index');
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
        return $this->redirect('dishes.index')
            ->withFlashMessage('Dish not found!')
            ->withFlashType('danger');
    }
}
