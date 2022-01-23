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
        <input class="form-control" type="text" name="Nombre" id="Nombre" value="{{ isset ($estudiante->Nombre)?$estudiante->Nombre:'' }}" required>
    </div>
    <div class="form-group">
        <label for="Apellido">Apellido</label>
        <input class="form-control" type="text" name="Apellido" id="Apellido" value="{{ isset ($estudiante->Apellido)?$estudiante->Apellido:'' }}" required>
        <br>
    </div>
    <div class="form-group">
        <label for="Documento">N° Documento:</label>
        <input class="form-control" type="number" name="Documento" id="Documento" value="{{ isset ($estudiante->Documento)?$estudiante->Documento:'' }}" maxlength="10" required>
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
        <label for="Correo">Correo</label>
        <input class="form-control" type="email" name="Correo" id="Correo" value="{{ isset ($estudiante->Correo)?$estudiante->Correo:'' }}" required>
        <br>
        <button type="submit" class="btn btn-success" type="submit">{{$modo}}</button>
        <a class="btn btn-dark" href="{{ url('/estudiante/')}}" class="href">Regresar</a>
        <br>
    </div>