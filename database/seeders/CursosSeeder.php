<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1
        DB::table("cursos")->insert([
            "id_semestre" => 1,
            "curso" => "MATEMÁTICA BÁSICA"
        ]);
        DB::table("cursos")->insert([
            "id_semestre" => 1,
            "curso" => "ÉTICA CÍVICA"
        ]);

        // 2
        DB::table("cursos")->insert([
            "id_semestre" => 2,
            "curso" => "CÁLCULO I"
        ]);
        DB::table("cursos")->insert([
            "id_semestre" => 2,
            "curso" => "ÁLGEBRA LINEAL"
        ]);

        // 3
        DB::table("cursos")->insert([
            "id_semestre" => 3,
            "curso" => "CÁLCULO II"
        ]);
        DB::table("cursos")->insert([
            "id_semestre" => 3,
            "curso" => "INTRODUCCIÓN A LA PROGRAMACIÓN"
        ]);

        // 4
        DB::table("cursos")->insert([
            "id_semestre" => 4,
            "curso" => "CÁLCULO III"
        ]);
        DB::table("cursos")->insert([
            "id_semestre" => 4,
            "curso" => "PROGRAMACIÓN ORIENTADA A OBJETOS"
        ]);

        // 5
        DB::table("cursos")->insert([
            "id_semestre" => 5,
            "curso" => "ESTADÍSTICA APLICADA"
        ]);
        DB::table("cursos")->insert([
            "id_semestre" => 5,
            "curso" => "ESTRUCTURAS DE DATOS Y ALGORITMOS"
        ]);

        // 6
        DB::table("cursos")->insert([
            "id_semestre" => 6,
            "curso" => "INVESTIGACIÓN OPERACIONES I"
        ]);
        DB::table("cursos")->insert([
            "id_semestre" => 6,
            "curso" => "INGENIERÍA DE DATOS"
        ]);

        // 7
        DB::table("cursos")->insert([
            "id_semestre" => 7,
            "curso" => "ING. SOFTWARE I"
        ]);
        DB::table("cursos")->insert([
            "id_semestre" => 7,
            "curso" => "ADMINISTRACIÓN DE BASE DE DATOS"
        ]);

        // 8
        DB::table("cursos")->insert([
            "id_semestre" => 8,
            "curso" => "MACHINE LEARNING"
        ]);
        DB::table("cursos")->insert([
            "id_semestre" => 8,
            "curso" => "ING. SOFTWARE II"
        ]);

        // 9
        DB::table("cursos")->insert([
            "id_semestre" => 9,
            "curso" => "PLANEAMIENTO ESTRATÉGICO"
        ]);
        DB::table("cursos")->insert([
            "id_semestre" => 9,
            "curso" => "GESTIÓN DE SERVICIOS DE TI"
        ]);

        // 10
        DB::table("cursos")->insert([
            "id_semestre" => 10,
            "curso" => "PROGRAMACIÓN DE VIDEOJUEGOS"
        ]);
        DB::table("cursos")->insert([
            "id_semestre" => 10,
            "curso" => "ARQUITECTURA DE SOFTWARE"
        ]);
    }
}
