<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SemestresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("semestres")->insert([
            "semestre" => "Uno"
        ]);
        DB::table("semestres")->insert([
            "semestre" => "Dos"
        ]);
        DB::table("semestres")->insert([
            "semestre" => "Tres"
        ]);
        DB::table("semestres")->insert([
            "semestre" => "Cuatro"
        ]);
        DB::table("semestres")->insert([
            "semestre" => "Cinco"
        ]);
        DB::table("semestres")->insert([
            "semestre" => "Seis"
        ]);
        DB::table("semestres")->insert([
            "semestre" => "Siete"
        ]);
        DB::table("semestres")->insert([
            "semestre" => "Ocho"
        ]);
        DB::table("semestres")->insert([
            "semestre" => "Nueve"
        ]);
        DB::table("semestres")->insert([
            "semestre" => "Diez"
        ]);
    }
}
