@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar curso</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($curso, ['route' => ['admin.cursos.update', $curso], 'method' => 'put']) !!}

            {!! Form::label('curso', 'Nombre del curso', ['class' => 'form-labe']) !!}
            {!! Form::text('curso', $curso->curso, ['class' => 'form-control']) !!}

            {!! Form::label('', 'Semestre asignado:', ['class' => 'form-label mt-3']) !!}
            @foreach ($semestres as $semestre)
                <div>
                    <label>
                        @if ($curso->id_semestre === $semestre->id)
                            {!! Form::checkbox('semestre', $semestre->id, true, ['class' => 'mr-1']) !!}
                            {{ $semestre->semestre }}
                        @else
                            {!! Form::checkbox('semestre', $semestre->id, null, ['class' => 'mr-1']) !!}
                            {{ $semestre->semestre }}
                        @endif
                    </label>
                </div>
            @endforeach
            {!! Form::submit('Guardar', ['class' => 'btn btn-primary mt-2']) !!}
            {!! Form::close() !!}
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
