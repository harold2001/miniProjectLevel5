@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <style>
        #custom-select {
            display: inline-block;
            width: 100%;
            padding: 0.375rem 1.75rem 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            vertical-align: middle;
            background: #fff url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e) right 0.75rem center/8px 10px no-repeat;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            box-shadow: inset 0 1px 2px rgb(0 0 0 / 8%);
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
    </style>
    <h1>Agregar curso</h1>
@stop

@section('content')
    <div class="card">
        @if (session('updated'))
            <div class="alert alert-success">
                <strong>{{ session('updated') }}</strong>
            </div>
        @endif
        @if (session('deleted'))
            <div class="alert alert-danger">
                <strong>{{ session('deleted') }}</strong>
            </div>
        @endif
        <div class="card-body d-flex justify-content-around align-items-center">
            <div class="col-5">
                <p class="h3">Cursos inscritos</p>
                <table class="table table-striped col-12" id="table">
                    <thead>
                        <tr>
                            <th>ID curso</th>
                            <th>Nombre</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < $me[0]->cursosAlumno->count(); $i++)
                            <tr>
                                <td>{{ $me[0]->cursosAlumno[$i]->id }}</td>
                                <td>{{ $me[0]->cursosAlumno[$i]->curso }}</td>
                                <td width="10px">
                                    <form action="{{ route('alumno_cursos.destroy', $todosAlumnoCurso[$i]->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
            <div class="col-5" style="height: 100%">
                <p class="h3">Cursos disponibles</p>
                <form action="{{ route('alumno_cursos.update', $me[0]->id) }}" method="post">
                    @csrf
                    @method('put')
                    <select class="form-select" multiple aria-label="multiple select example" id="custom-select"
                        size="10" name="cursos[]">
                        <option selected disabled>Selecciona todos los que quieras:</option>
                        @for ($i = 0; $i < $noalumnoCurso->count(); $i++)
                            @if (isset($me[0]->cursosAlumno[$i]))
                                @if ($me[0]->cursosAlumno[$i]->id !== $noalumnoCurso[$i]->id)
                                    <option value="{{ $noalumnoCurso[$i]->id }}">{{ $noalumnoCurso[$i]->id }}.
                                        {{ $noalumnoCurso[$i]->curso }}
                                    </option>
                                @endif
                            @else
                                <option value="{{ $noalumnoCurso[$i]->id }}">{{ $noalumnoCurso[$i]->id }}.
                                    {{ $noalumnoCurso[$i]->curso }}
                                </option>
                            @endif
                        @endfor
                    </select>
                    <button type="submit" class="btn btn-primary mt-3">Agregar cursos</button>
                </form>
            </div>

        </div>
        <div class="card-footer">
            <strong>Total de cursos registrados: {{ $alumnoCurso->count() }}</strong>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
