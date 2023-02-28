<?php

namespace App\Http\Livewire\Admin;

use App\Models\Curso;
use Livewire\Component;

use Livewire\WithPagination;

class CursosIndex extends Component
{
    use WithPagination;

    public $letras;

    protected $paginationTheme = "bootstrap";

    public function updatingLetras()
    {
        $this->resetPage();
    }

    public function render()
    {
        // $cursos = Curso::all();
        $cursos = Curso::where("curso", "LIKE", "%" . $this->letras . "%")
            ->orWhere("id_semestre", "LIKE", "%" . $this->letras . "%")
            ->orWhere("id", "LIKE", "%" . $this->letras . "%")
            ->paginate(10);;

        return view('livewire.admin.cursos-index', compact("cursos"));
    }
}
