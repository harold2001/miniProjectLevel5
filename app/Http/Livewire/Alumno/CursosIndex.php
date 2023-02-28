<?php

namespace App\Http\Livewire\Alumno;

use App\Models\AlumnoCurso;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CursosIndex extends Component
{
    public $search;
    
    public function render()
    {
        $myId = Auth::user()->id;

        $me = User::where("id", $myId)->get();

        $alumnoCurso = AlumnoCurso::where("id_alumno", $myId)->get();

        return view('livewire.alumno.cursos-index', compact("me", "alumnoCurso"));
    }
}
