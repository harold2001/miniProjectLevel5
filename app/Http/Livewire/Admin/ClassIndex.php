<?php

namespace App\Http\Livewire\Admin;

use App\Models\Curso;
use App\Models\CursoMaestro;
use App\Models\User;
use Livewire\Component;

class ClassIndex extends Component
{
    public $searchcurso;

    public function render()
    {
        $cursos = Curso::all();

        $cursoSeleccionado = Curso::where("id", $this->searchcurso)->first();
        
        $cursoMaestro = CursoMaestro::where("id_curso", $this->searchcurso)->first();

        $maestros = User::all();
        
        return view('livewire.admin.class-index', compact("cursos", "cursoMaestro", "cursoSeleccionado", "maestros"));
    }
}
