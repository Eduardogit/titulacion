<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatedatosActaRequest;
use App\Http\Requests\UpdatedatosActaRequest;
use App\Repositories\datosActaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class datosActaController extends AppBaseController
{
    /** @var  datosActaRepository */
    private $datosActaRepository;

    public function __construct(datosActaRepository $datosActaRepo)
    {
        $this->datosActaRepository = $datosActaRepo;
    }

    /**
     * Display a listing of the datosActa.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->datosActaRepository->pushCriteria(new RequestCriteria($request));
        $datosActas = $this->datosActaRepository->all();

        return view('datos_actas.index')
            ->with('datosActas', $datosActas);
    }

    /**
     * Show the form for creating a new datosActa.
     *
     * @return Response
     */
    public function create()
    {
        return view('datos_actas.create');
    }

    /**
     * Store a newly created datosActa in storage.
     *
     * @param CreatedatosActaRequest $request
     *
     * @return Response
     */
    public function store(CreatedatosActaRequest $request)
    {
        $input = $request->all();

        $datosActa = $this->datosActaRepository->create($input);

        Flash::success('Datos Acta saved successfully.');

        return redirect(route('datosActas.index'));
    }

    /**
     * Display the specified datosActa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $datosActa = $this->datosActaRepository->findWithoutFail($id);

        if (empty($datosActa)) {
            Flash::error('Datos Acta not found');

            return redirect(route('datosActas.index'));
        }

        return view('datos_actas.show')->with('datosActa', $datosActa);
    }

    /**
     * Show the form for editing the specified datosActa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $datosActa = $this->datosActaRepository->findWithoutFail($id);

        if (empty($datosActa)) {
            Flash::error('Datos Acta not found');

            return redirect(route('datosActas.index'));
        }

        return view('datos_actas.edit')->with('datosActa', $datosActa);
    }

    /**
     * Update the specified datosActa in storage.
     *
     * @param  int              $id
     * @param UpdatedatosActaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatedatosActaRequest $request)
    {
        $datosActa = $this->datosActaRepository->findWithoutFail($id);

        if (empty($datosActa)) {
            Flash::error('Datos Acta not found');

            return redirect(route('datosActas.index'));
        }

        $datosActa = $this->datosActaRepository->update($request->all(), $id);

        Flash::success('Datos Acta updated successfully.');

        return redirect(route('datosActas.index'));
    }

    /**
     * Remove the specified datosActa from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $datosActa = $this->datosActaRepository->findWithoutFail($id);

        if (empty($datosActa)) {
            Flash::error('Datos Acta not found');

            return redirect(route('datosActas.index'));
        }

        $this->datosActaRepository->delete($id);

        Flash::success('Datos Acta deleted successfully.');

        return redirect(route('datosActas.index'));
    }
}
