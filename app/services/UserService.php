<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;

class UserService
{
    public function getAllUsers()
    {
        return User::all();
    }

    public function getUserById($id)
    {
        return User::findOrFail($id);
    }

    public function createUser(array $data)
    {
        $this->validateUserData($data);

        return User::create($data);
    }

    public function updateUser($id, array $data)
    {
        $user = User::findOrFail($id);
        $this->validateUserData($data, $user->id);

        $user->update($data);
        return $user;
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    }

    private function validateUserData(array $data, $userId = null)
    {
        $rules = [
            'usuario' => 'required|string',
            'primerNombre' => 'required|string',
            'segundoNombre' => 'nullable|string',
            'primerApellido' => 'required|string',
            'segundoApellido' => 'nullable|string',
            'idDepartamento' => 'required|integer',
            'idCargo' => 'required|integer',
        ];

        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
    }
}
