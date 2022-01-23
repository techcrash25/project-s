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
        <input class="form-control" type="text" name="Nombre" id="Nombre" value="{{ isset ($docente->Nombre)?$docente->Nombre:'' }}" required>
    </div>
    <div class="form-group">
        <label for="Apellido">Apellido</label>
        <input class="form-control" type="text" name="Apellido" id="Apellido" value="{{ isset ($docente->Apellido)?$docente->Apellido:'' }}" required>
        <br>
    </div>
    <div class="form-group">
        <label for="Documento">N° Documento:</label>
        <input class="form-control" type="number" name="Documento" id="Documento" value="{{ isset ($docente->Documento)?$docente->Documento:'' }}" min="00000" max="9999999999" required>
        <br>
    </div>
    
    <div class="form-group">
        <label for="Correo">Correo</label>
        <input class="form-control" type="email" name="Correo" id="Correo" value="{{ isset ($docente->Correo)?$docente->Correo:'' }}" required>
        <br>
        <button type="submit" class="btn btn-success" type="submit">{{$modo}}</button>
        <a class="btn btn-dark" href="{{ url('/docente/')}}" class="href">Regresar</a>
        <br>
    </div>