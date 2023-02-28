<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = "cursos";
    public $timestamps = false;

    public function semestres()
    {
        return $this->belongsTo(Semestre::class, "id");
    }

    public function users()
    {
        return $this->belongsToMany(User::class, "curso_maestros", "id_curso", "id_maestro", "id", "id");
    }
}
