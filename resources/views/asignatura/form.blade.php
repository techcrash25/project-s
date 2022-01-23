    @if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="form-group">
        <label for="Nombre">Nombre</label>
        <input class="form-control" type="text" name="Nombre" id="Nombre" value="{{ isset ($asignatura->Nombre)?$asignatura->Nombre:'' }}" required>
    </div>
    <div class="form-group">
        <label for="Codigo">Código</label>
        <input class="form-control" type="text" name="Codigo" id="Codigo" value="{{ isset ($asignatura->Codigo)?$asignatura->Codigo:'' }}" required>
        <br>
    </div>
    <div class="form-group">
        <label for="Docente">Docente</label>
        <select class="form-control" name="docente_id" id="docente_id"  required>
            <option value="">Seleccione</option>
            <option value="1">Marcos Cota</option>
        </select>
        <br>
    </div>
    <div class="form-group">
        <label for="Docente">Estudiante</label>
        <select class="form-control" name="estudiante_id" id="estudiante_id"  required>
            <option value="">Seleccione</option>
            <option value="1">Andres Pardo</option>
        </select>
        <br>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success" type="submit">{{$modo}}</button>
        <a class="btn btn-dark" href="{{ url('/asignatura/')}}" class="href">Regresar</a>
        <br>
    </div>