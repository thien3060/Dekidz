<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\DateHelper;
use App\Validation\MaintenanceBallot\CreateRequest;
use App\Validation\MaintenanceBallot\UpdateRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Http\Requests;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;

class MaintenanceBallotController extends BaseController
{
    protected $maintenance_ballots;

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
        $repository = 'App\Repositories\Contracts\MaintenanceBallotRepository';
        return app($repository);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maintenance_ballots = $this->repository->allOrSearch(Input::get('q'));

        $no = $maintenance_ballots->firstItem();

        return $this->view('pages.maintenance_ballots.index', compact('maintenance_ballots', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.maintenance_ballots.create');
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

        $data['created_by'] = \Auth::id();
        
        $this->repository->create($data);

        return $this->redirect('maintenance_ballots.index');
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
            $maintenance_ballot = $this->repository->findById($id);

            //Date convert
            $maintenance_ballot->date = DateHelper::normalDateFormat($maintenance_ballot->date);

            return $this->view('pages.maintenance_ballots.edit', compact('maintenance_ballot'));
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

            return $this->redirect('maintenance_ballots.index');
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

            return $this->redirect('maintenance_ballots.index');
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
        return $this->redirect('maintenance_ballots.index')
            ->withFlashMessage('Maintenance ballot not found!')
            ->withFlashType('danger');
    }
}
