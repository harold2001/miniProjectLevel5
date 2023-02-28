<?php

namespace App\Http\Controllers\Alumno;

use App\Http\Controllers\Controller;
use App\Models\AlumnoCurso;
use App\Models\Curso;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AlumnoCursoController extends Controller
{
    public function index(): Response
    {
        return response(view("alumno.cursos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        $myId = Auth::user()->id;

        $me = User::where("id", $myId)->get();

        $alumnoCurso = AlumnoCurso::where("id_alumno", $myId)->get();

        $noalumnoCurso = Curso::all();

        $todosAlumnoCurso = AlumnoCurso::all();

        return response(view("alumno.edit", compact("me", "alumnoCurso", "noalumnoCurso", "todosAlumnoCurso")));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
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
    public function update(Request $request, $id)
    {
        $myId = Auth::user()->id;

        foreach ($request->cursos as $curso) {
            $alumnoCurso = new AlumnoCurso();

            $alumnoCurso->id_alumno = $myId;
            $alumnoCurso->id_curso = $curso;

            $alumnoCurso->save();
        }

        return redirect()->route("alumno_cursos.create")->with("updated", "Actualizado");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $alumnoCurso = AlumnoCurso::find($id);
        
        $alumnoCurso->delete();

        return redirect()->route("alumno_cursos.create")->with("deleted", "Cursos eliminados");
    }
}
