<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\DateHelper;
use App\Validation\ExportAsset\CreateRequest;
use App\Validation\ExportAsset\UpdateRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Http\Requests;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;

class ExportAssetController extends BaseController
{
    protected $export_assets;

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
        $repository = 'App\Repositories\Contracts\ExportAssetRepository';
        return app($repository);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $export_assets = $this->repository->allOrSearch(Input::get('q'));

        $no = $export_assets->firstItem();

        return $this->view('pages.export_assets.index', compact('export_assets', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.export_assets.create');
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

        return $this->redirect('export_assets.index');
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
            $export_asset = $this->repository->findById($id);

            //Date convert
            $export_asset->date = DateHelper::normalDateFormat($export_asset->date);

            return $this->view('pages.export_assets.edit', compact('export_asset'));
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

            return $this->redirect('export_assets.index');
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

            return $this->redirect('export_assets.index');
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
        return $this->redirect('export_assets.index')
            ->withFlashMessage('Export Asset not found!')
            ->withFlashType('danger');
    }
}
