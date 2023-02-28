<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AlumnoCurso;
use App\Models\Curso;
use App\Models\CursoMaestro;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
    public function index(): Response
    {
        $classes = Curso::all();

        return response(view("admin.clases.index", compact("classes")));
    }

    public function update(Request $request, $id)
    {
        if ($cursoMaestro = CursoMaestro::where("id_curso", $id)->first()) {
            $cursoMaestro = CursoMaestro::where("id_curso", $id)->first();

            $cursoMaestro->id_maestro = $request->id_maestro;
            $cursoMaestro->save();
        } else {

            $cursoMaestro = new CursoMaestro();

            $cursoMaestro->id_maestro = $request->id_maestro;
            $cursoMaestro->id_curso = $request->id_curso;

            $cursoMaestro->save();
        }
        return redirect()->route("asignar_clase.index", compact("cursoMaestro"))->with("info", "Actualizado");
    }
}
