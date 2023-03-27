@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Agregar nuevo curso</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    {{-- @error('curso')
        {{ $message }}
    @enderror --}}

    <div class="card">
        <div class="card-body">
            {!! Form::model(['route' => ['agregar_curso.store'], 'method' => 'put']) !!}

            {!! Form::label('curso', 'Nombre del curso:', ['class' => 'form-label']) !!}
            {!! Form::text('curso', '', ['class' => 'form-control', 'required']) !!}

            {!! Form::label('#', 'Selecciona el semestre correspondiente:', ['class' => 'form-label mb-0 mt-3']) !!}
            @foreach ($semestres as $semestre)
                <div>
                    <label>
                        {!! Form::checkbox('semestre', $semestre->id, null, ['class' => 'mr-1']) !!}
                        {{ $semestre->semestre }}
                    </label>
                </div>
            @endforeach
            {!! Form::submit('Agregar curso', ['class' => 'btn btn-primary mt-2']) !!}
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
