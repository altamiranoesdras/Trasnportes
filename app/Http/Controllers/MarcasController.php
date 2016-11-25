<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMarcasRequest;
use App\Http\Requests\UpdateMarcasRequest;
use App\Repositories\MarcasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MarcasController extends AppBaseController
{
    /** @var  MarcasRepository */
    private $marcasRepository;

    public function __construct(MarcasRepository $marcasRepo)
    {
        $this->marcasRepository = $marcasRepo;
    }

    /**
     * Display a listing of the Marcas.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->marcasRepository->pushCriteria(new RequestCriteria($request));
        $marcas = $this->marcasRepository->all();

        return view('marcas.index')
            ->with('marcas', $marcas);
    }

    /**
     * Show the form for creating a new Marcas.
     *
     * @return Response
     */
    public function create()
    {
        return view('marcas.create');
    }

    /**
     * Store a newly created Marcas in storage.
     *
     * @param CreateMarcasRequest $request
     *
     * @return Response
     */
    public function store(CreateMarcasRequest $request)
    {
        $input = $request->all();

        $marcas = $this->marcasRepository->create($input);

        Flash::success('Marcas grabado exitosamente.');

        return redirect(route('marcas.index'));
    }

    /**
     * Display the specified Marcas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $marcas = $this->marcasRepository->findWithoutFail($id);

        if (empty($marcas)) {
            Flash::error('Marcas no encontrado');

            return redirect(route('marcas.index'));
        }

        return view('marcas.show')->with('marcas', $marcas);
    }

    /**
     * Show the form for editing the specified Marcas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $marcas = $this->marcasRepository->findWithoutFail($id);

        if (empty($marcas)) {
            Flash::error('Marcas no encontrado');

            return redirect(route('marcas.index'));
        }

        return view('marcas.edit')->with('marcas', $marcas);
    }

    /**
     * Update the specified Marcas in storage.
     *
     * @param  int              $id
     * @param UpdateMarcasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMarcasRequest $request)
    {
        $marcas = $this->marcasRepository->findWithoutFail($id);

        if (empty($marcas)) {
            Flash::error('Marcas no encontrado');

            return redirect(route('marcas.index'));
        }

        $marcas = $this->marcasRepository->update($request->all(), $id);

        Flash::success('Marca actualizada correctamente.');

        return redirect(route('marcas.index'));
    }

    /**
     * Remove the specified Marcas from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $marcas = $this->marcasRepository->findWithoutFail($id);

        if (empty($marcas)) {
            Flash::error('Marcas no encontrado');

            return redirect(route('marcas.index'));
        }

        $this->marcasRepository->delete($id);

        Flash::success('Marcas deleted successfully.');

        return redirect(route('marcas.index'));
    }
}
