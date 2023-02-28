<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use App\Models\Semestre;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StoreCursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $semestres = Semestre::all();
        return response(view("admin.cursos.store", compact("semestres")));
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
        $curso = new Curso();
        $curso->id_semestre = $request->semestre;
        $curso->curso = $request->curso;

        if ($curso->save()) {
            $curso->save();
            return redirect()->route("agregar_curso.index")->with("info", "Curso agregado con éxito.");
        } 
        // else {
        //     return redirect()->route("agregar_curso.index")->with("info", "Se ha repetido el nombre del curso");
        // }
        // return redirect()->route("agregar_curso.index")->with("info", "Curso agregado con éxito.");
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

}
