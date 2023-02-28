<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\User;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $roles = Role::all();
        return response(view("admin.users.index", compact("roles")));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user): Response
    {
        $roles = Role::all();
        return response(view("admin.users.edit", compact("user", "roles")));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user): RedirectResponse
    {
        $user->roles()->sync($request->roles);

        return redirect()->route("admin.users.edit", $user)->with("info", "Se asignó el rol");
    }

    public function destroy(User $user) {
        $user->delete();

        return redirect()->route("admin.users.index");
    }
}
