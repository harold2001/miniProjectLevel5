<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\Permission\Models\Role;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $roles = Role::all();
        return response(view("admin.users.store", compact("roles")));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        // $rolnumber = $request->roles[0];

        // switch ($rolnumber) {
        //     case ($rolnumber == 1):
        //         $finalrol = "admin";
        //         break;
        //     case ($rolnumber == 2):
        //         $finalrol = "maestro";
        //         break;
        //     case ($rolnumber == 3):
        //         $finalrol = "alumno";
        //         break;
        //     default:
        //         # code...
        //         break;
        // }

        $user->save();

        // $user->assignRole($finalrol);

        $user->roles()->sync($request->roles);

        return redirect()->route("agregar_usuario.index")->with("info", "Se agregó el usuario");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
