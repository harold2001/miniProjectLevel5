<div>
    <div>
        <div class="card">
            {{-- {{ $me[0]->cursosAlumno[0] }} --}}
            {{-- {{ $alumnoCurso }} --}}
            <div class="card-body">
                <table class="table table-striped col-12" id="table">
                    <thead>
                        <tr>
                            <th>ID curso</th>
                            <th>Nombre</th>
                            <th>Calificación</th>
                            <th>Comentario</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < $me[0]->cursosAlumno->count(); $i++)
                            <tr>
                                <td>{{ $me[0]->cursosAlumno[$i]->id }}</td>
                                <td>{{ $me[0]->cursosAlumno[$i]->curso }}</td>
                                <td>{{ $alumnoCurso[$i]->calificacion }}</td>
                                <td>{{ $alumnoCurso[$i]->comentario }}</td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <strong>Total de registros: {{ $alumnoCurso->count() }}</strong>
            </div>
        </div>
    </div>
    @livewireScripts
</div>
