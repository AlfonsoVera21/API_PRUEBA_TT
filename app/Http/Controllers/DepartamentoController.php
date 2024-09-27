<?php

namespace App\Http\Controllers;

use App\Response\ErrorResponse;
use App\Response\SuccessResponse;
use App\Services\DepartamentoService;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    protected $departamentoService;

    public function __construct(DepartamentoService $departamentoService)
    {
        $this->departamentoService = $departamentoService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $departamentos = $this->departamentoService->getAllDepartamentos();
            return response()->json(SuccessResponse::success($departamentos, 'Lista de departamentos obtenida correctamente.'));
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
            $departamento = $this->departamentoService->getDepartamentoById($id);
            return response()->json(SuccessResponse::success($departamento, "Departamento con id $id obtenido correctamente."));
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
