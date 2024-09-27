<?php

namespace App\Http\Controllers;

use App\Response\ErrorResponse;
use App\Response\SuccessResponse;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $users = $this->userService->getAllUsers();
            return response()->json(SuccessResponse::success($users));
        } catch (\Exception $e) {
            return ErrorResponse::error($e);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $user = $this->userService->createUser($request->all());
            return response()->json(SuccessResponse::success($user, 'Usuario creado con éxito.'), 201);
        } catch (\Exception $e) {
            return ErrorResponse::error($e);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $user = $this->userService->getUserById($id);
            return response()->json(SuccessResponse::success($user));
        } catch (\Exception $e) {
            return ErrorResponse::error($e);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $user = $this->userService->updateUser($id, $request->all());
            return response()->json(SuccessResponse::success($user, 'Usuario actualizado con éxito.'));
        } catch (\Exception $e) {
            return ErrorResponse::error($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $this->userService->deleteUser($id);
            return response()->json(SuccessResponse::success(null, 'Usuario eliminado con éxito.'));
        } catch (\Exception $e) {
            return ErrorResponse::error($e);
        }
    }
}
