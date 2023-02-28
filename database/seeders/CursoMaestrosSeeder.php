<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoMaestrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("curso_maestros")->insert([
            "id_maestro" => 10,
            "id_curso" => "1",
        ]);
        DB::table("curso_maestros")->insert([
            "id_maestro" => 20,
            "id_curso" => "2",
        ]);
        DB::table("curso_maestros")->insert([
            "id_maestro" => 30,
            "id_curso" => "5",
        ]);
        DB::table("curso_maestros")->insert([
            "id_maestro" => 40,
            "id_curso" => "10",
        ]);
        DB::table("curso_maestros")->insert([
            "id_maestro" => 50,
            "id_curso" => "15",
        ]);
    }
}
