<div>
    <div class="card">
        <div class="card-header">
            <select name="maestro" id="" class="form-control" required>
                <option value="null" selected disabled>Selecciona un maestro</option>
                @foreach ($usuarios as $usuario)
                    @if ($usuario->hasRole('maestro'))
                        <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
</div>
