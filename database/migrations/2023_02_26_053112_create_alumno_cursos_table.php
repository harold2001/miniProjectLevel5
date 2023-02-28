<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alumno_cursos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_alumno");
            $table->foreign("id_alumno")->references("id")->on("users");
            $table->unsignedBigInteger("id_curso");
            $table->foreign("id_curso")->references("id")->on("cursos");
            $table->integer("calificacion")->nullable();
            $table->text("comentario")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumno_cursos');
    }
};
