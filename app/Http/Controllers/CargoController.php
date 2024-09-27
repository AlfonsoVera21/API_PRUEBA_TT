<?php

namespace App\Http\Controllers;

use App\Response\ErrorResponse;
use App\Response\SuccessResponse;
use App\Services\CargoService;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    protected $cargoService;

    public function __construct(CargoService $cargoService)
    {
        $this->cargoService = $cargoService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $cargos = $this->cargoService->getAllCargos();
            return response()->json(SuccessResponse::success($cargos, 'Lista de cargos obtenida correctamente.'));
        } catch (\Exception $e) {
            return ErrorResponse::error($e);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $cargo = $this->cargoService->getCargoById($id);
            return response()->json(SuccessResponse::success($cargo, "Cargo con id $id obtenido correctamente."));
        } catch (\Exception $e) {
            return ErrorResponse::error($e);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
