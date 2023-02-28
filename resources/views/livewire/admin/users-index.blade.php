<div>
    <div class="card">
        <div class="card-header">
            <select name="filter" wire:model="rolinput" class="form-control col-12 col-lg-4 col-xl-3">
                <option value="null" selected disabled>Selecciona una categoría</option>
                <option value="todos">Todos</option>
                <option value="admin">Admin</option>
                <option value="maestro">Maestro</option>
                <option value="alumno">Alumno</option>
            </select>
            <hr style="margin: .8rem .8rem;">
            <input wire:model="search" type="text" class="form-control"
                placeholder="Ingrese el nombre o correo de un usuario" />
        </div>
        @if ($users->count())
            <div class="card-body">
                <table class="table table-striped col-12" id="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    @if (isset($rolinput) && $rolinput !== 'todos')
                        <tbody>
                            @foreach ($users as $user)
                                @if ($user->hasRole($rolinput))
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @switch($user)
                                                @case($user->hasRole('admin'))
                                                    <p class="btn rol">Admin</p>
                                                @break

                                                @case($user->hasRole('maestro'))
                                                    <p class="btn rol">Maestro</p>
                                                @break

                                                @case($user->hasRole('alumno'))
                                                    <p class="btn rol">Alumno</p>
                                                @break

                                                @default
                                                    <strong>No asignado</strong>
                                                @break
                                            @endswitch
                                        </td>
                                        <td width="10px">
                                            <a href="{{ route('admin.users.edit', $user) }}"
                                                class="btn btn-primary">Editar</a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    @else
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @switch($user)
                                            @case($user->hasRole('admin'))
                                                <p class="btn rol">Admin</p>
                                            @break

                                            @case($user->hasRole('maestro'))
                                                <p class="btn rol">Maestro</p>
                                            @break

                                            @case($user->hasRole('alumno'))
                                                <p class="btn rol">Alumno</p>
                                            @break

                                            @default
                                                <strong>No asignado</strong>
                                            @break
                                        @endswitch
                                    </td>
                                    <td width="10px">
                                        <a href="{{ route('admin.users_edit', $user) }}"
                                            class="btn btn-primary">Editar</a>
                                    </td>
                                    <td width="10px">
                                        <form action="{{ route('admin.users.destroy', $user) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    @endif
                </table>
            </div>

            <div class="card-footer">
                {{ $users->links('') }}
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        @endif
    </div>
</div>
@livewireScripts

<style>
    .rol {
        background-color: #ffdd57;
        font-weight: 700;
        margin: 0;
        cursor: default !important;
    }

    @media screen and (max-width: 768px) {
        #table {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
        }
    }
</style>
