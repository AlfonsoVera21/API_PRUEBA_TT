<?php

namespace App\Services;

use App\Models\Departamento;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Log;

class DepartamentoService
{
    public function getAllDepartamentos()
    {
        return Departamento::all();
    }

    public function getDepartamentoById($id)
    {
        $departamento = Departamento::find($id);
        if (!$departamento) {
            throw new ModelNotFoundException("El departamento con el id $id no fue encontrado.");
        }
        return $departamento;
    }

}
