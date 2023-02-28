<?php

use App\Http\Controllers\Admin\AsignarMaestroController;
use App\Http\Controllers\Admin\ClassController;
use App\Http\Controllers\Admin\CursoController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\StoreController;
use App\Http\Controllers\Admin\StoreCursoController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Alumno\AlumnoCursoController;
use Illuminate\Support\Facades\Route;


// Route::resource("users", UserController::class)->names("admin.users");
Route::get("", [HomeController::class, "index"])->name("dash.home");

Route::resource('users', UserController::class)->only(["index", "edit", "update", "destroy"])->names("admin.users");

Route::get('users/{user}', [UserController::class, "edit"])->name("admin.users_edit");

Route::resource('cursos', CursoController::class)->only(["index", "edit", "update", "destroy"])->names("admin.cursos");

Route::resource('store/user', StoreController::class)->only(["index", "store"])->names("agregar_usuario");

Route::post("store/stored", [StoreController::class, "store"])->name("admin.stored");

Route::resource('store/curso', StoreCursoController::class)->names("agregar_curso");

Route::resource('cursos/assign', ClassController::class)->only(["index", "edit","update"])->names("asignar_clase");

// Route::put('cursos/assign', [ClassController::class, "update"])->name("asignar_clase_update");

Route::resource('cursos/maestros', AsignarMaestroController::class)->only(["index"])->names("asignar_maestro");

Route::resource('cursos/alumno', AlumnoCursoController::class)->only(["index", "create", "update", "destroy"])->names("alumno_cursos");

// Route::post('store', StoreController::class, "store")->name("admin.stored");