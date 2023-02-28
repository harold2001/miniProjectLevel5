<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use App\Models\Semestre;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $cursos = Curso::all();
        // var_dump($cursos);
        return response(view("admin.cursos.index", compact("cursos")));
    }

    public function edit(Curso $curso): Response
    {
        $semestres = Semestre::all();
        return response(view("admin.cursos.edit", compact("curso", "semestres")));
    }

    public function update(Request $request, Curso $curso): RedirectResponse
    {
        $curso->curso = $request->curso;
        $curso->id_semestre = $request->semestre;

        $curso->save();

        return redirect()->route("admin.cursos.edit", $curso)->with("info", "Editado con éxito");
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect()->route("admin.cursos.index")->with("info", "Curso eliminado");
    }
}
