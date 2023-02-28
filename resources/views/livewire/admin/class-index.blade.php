<div>
    <div class="card">
        <div class="card-header">
            <select name="curso" wire:model="searchcurso" class="form-control col-12 mb-3">
                <option value="null" selected disabled>Selecciona un curso:</option>
                @foreach ($cursos as $curso)
                    <option value="{{ $curso->id }}">{{ $curso->id }}. {{ $curso->curso }}</option>
                @endforeach
            </select>
        </div>
        <div class="card-body">
            @if (session('info'))
                <div class="alert alert-success">
                    <strong>{{ session('info') }}</strong>
                </div>
            @endif
            @if (isset($searchcurso) && $searchcurso !== 'null')
                <div class="col-12 d-flex flex-column justify-content-center">
                    <form action="{{ route('asignar_clase.update', $cursoSeleccionado->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <p class="form-label mb-1"><strong>Nombre del curso:</strong></p>
                        <p class="form-control">{{ $cursoSeleccionado->curso }}</p>

                        @if (count($cursoSeleccionado->users) === 0)
                            <input type="text" hidden value="{{ $cursoSeleccionado->id }}" name="id_curso"
                                class="form-control">
                            <label for="id" class="form-label">No hay maestro seleccionado para este
                                curso:</label>
                            <select class="form-control col-12 mb-3" aria-required="true" name="id_maestro">
                                <option value=null selected>Selecciona un nuevo maestro:</option>
                                @foreach ($maestros as $maestro)
                                    @if ($maestro->hasRole('maestro'))
                                        <option value="{{ $maestro->id }}">{{ $maestro->id }}. {{ $maestro->name }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        @else
                            <p class="form-label mb-1"><strong>Profesor actualmente asignado:</strong></p>
                            <p class="form-control">{{ $cursoSeleccionado->users[0]->name }}</p>

                            <p class="form-label mb-1"><strong>ID del maestro actualmente asignado</strong></p>
                            <p class="form-control">{{ $cursoSeleccionado->users[0]->id }}</p>

                            <label for="id_maestro" class="form-label">Selecciona otro maestro:</label>
                            <select name="id_maestro" id="id_maestro" class="form-control col-12 mb-3" required>
                                <option value="null" selected>Selecciona un nuevo maestro:</option>
                                @foreach ($maestros as $maestro)
                                    @if ($maestro->hasRole('maestro'))
                                        <option value="{{ $maestro->id }}">{{ $maestro->id }}. {{ $maestro->name }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>

                        @endif
                        <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
                    </form>
                </div>
            @else
                <div class="col-12">
                    <p class="h1 text-center">Selecciona un curso</p>
                </div>
            @endif
        </div>
    </div>
</div>
@livewireScripts
