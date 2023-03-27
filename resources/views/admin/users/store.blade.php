@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Agregar nuevo usuario</h1>
@stop

@section('content')
    <div class="card">
        @if (session('info'))
            <div class="alert alert-success">
                {{ session("info") }}
            </div>
        @endif
        <div class="card-body">
            {!! Form::model(['route' => ['admin.stored'], 'method' => 'put']) !!}

            {!! Form::label('name', 'Ingresa el nombre:', ['class' => 'form-label']) !!}
            {!! Form::text('name', '', ['class' => 'form-control', 'required']) !!}

            {!! Form::label('email', 'Correo electrónico:', ['class' => 'form-label']) !!}
            {!! Form::email('email', '', ['class' => 'form-control', 'required']) !!}

            {!! Form::label('password', 'Contraseña', ['class' => 'form-label']) !!}
            {!! Form::password('password', ['class' => 'form-control', 'required']) !!}

            {!! Form::label('#', 'Selecciona un rol (opcional):', ['class' => 'form-label mb-0 mt-3']) !!}
            @foreach ($roles as $role)
                <div>
                    <label>
                        {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                        {{ $role->name }}
                    </label>
                </div>
            @endforeach
            {!! Form::submit('Agregar usuario', ['class' => 'btn btn-primary mt-2']) !!}
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
