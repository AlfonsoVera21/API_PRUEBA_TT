<?php

namespace App\Services;

use App\Models\Cargo;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CargoService
{
    public function getAllCargos()
    {
        return Cargo::all();
    }
    public function getCargoById($id)
    {
        $cargo = Cargo::find($id);
        if (!$cargo) {
            throw new ModelNotFoundException("El cargo con el id $id no fue encontrado.");
        }
        return $cargo;
    }
}
