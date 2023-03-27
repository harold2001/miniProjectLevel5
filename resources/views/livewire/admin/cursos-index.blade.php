<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="letras" type="text" class="form-control"
                placeholder="Ingrese el nombre o correo de un usuario" />
        </div>
        @if (session('info'))
            <div class="alert alert-danger">
                <strong>{{ session('info') }}</strong>
            </div>
        @endif
        @if ($cursos->count())
            <div class="card-body">
                <table class="table table-striped col-12" id="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Semestre</th>
                            <th>Curso</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cursos as $curso)
                            <tr>
                                <td>{{ $curso->id }}</td>
                                <td>{{ $curso->id_semestre }}</td>
                                <td>{{ $curso->curso }}</td>
                                <td>
                                    <a href="{{ route('admin.cursos.edit', $curso) }}"
                                        class="btn btn-primary">Editar</a>
                                </td>
                                <td>
                                    <form action="{{ route('admin.cursos.destroy', $curso) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                {{ $cursos->links('') }}
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        @endif
    </div>
</div>
@livewireScripts
