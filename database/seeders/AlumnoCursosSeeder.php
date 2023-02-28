<?php

namespace Database\Seeders;

use App\Models\AlumnoCurso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnoCursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("alumno_cursos")->insert([
            "id_alumno" => 3,
            "id_curso" => "1",
            "calificacion" => 20,
            "comentario" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque atque quos aperiam ea rerum eos debitis nemo, odit hic alias exercitationem, deleniti illum quasi optio consequatur mollitia, explicabo ipsam sunt."
        ]);
        DB::table("alumno_cursos")->insert([
            "id_alumno" => 3,
            "id_curso" => "2",
            "calificacion" => 15,
            "comentario" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque atque quos aperiam ea rerum eos debitis nemo, odit hic alias exercitationem, deleniti illum quasi optio consequatur mollitia, explicabo ipsam sunt."
        ]);
        DB::table("alumno_cursos")->insert([
            "id_alumno" => 3,
            "id_curso" => "3",
            "calificacion" => 13,
            "comentario" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque atque quos aperiam ea rerum eos debitis nemo, odit hic alias exercitationem, deleniti illum quasi optio consequatur mollitia, explicabo ipsam sunt."
        ]);
        DB::table("alumno_cursos")->insert([
            "id_alumno" => 3,
            "id_curso" => "4",
            "calificacion" => 14,
            "comentario" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque atque quos aperiam ea rerum eos debitis nemo, odit hic alias exercitationem, deleniti illum quasi optio consequatur mollitia, explicabo ipsam sunt."
        ]);
    }
}
