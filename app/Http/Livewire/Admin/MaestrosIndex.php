<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class MaestrosIndex extends Component
{
    public function render()
    {
        $usuarios = User::all();
        return view('livewire.admin.maestros-index', compact("usuarios"));
    }
}
