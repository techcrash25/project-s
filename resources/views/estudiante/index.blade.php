<html>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
@extends('adminlte::page')

@section('title','UTS Estudiante')

@section('content')
@section('content')
<div class="container">
    <h1>Listado de estudiantes</h1>
    @if (Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get('mensaje')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <br>
    <a class="btn btn-success" href="{{ url ('estudiante/create' )}}">Registrar estudiante</a>
    <br><br>

    <table class="table table-light">
        <thead class="thead-list">
            <tr>
                <th>#</th>
                <th>Documento</th>
                <th>Nombre(s)</th>
                <th>Apellido(s)</th>
                <th>Correo</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $estudiante)
            <tr>
                <td>{{ $estudiante->id}}</td>
                <td>{{ $estudiante->Documento}}</td>
                <td>{{ $estudiante->Nombre}}</td>
                <td>{{ $estudiante->Apellido}}</td>
                <td>{{ $estudiante->Correo}}</td>
                <td>Enfermo</td>
                <td>
                    <a class="btn btn-light" href="{{ url('/estudiante/'.$estudiante->id.'/edit')}}">
                        <span class="material-icons">
                            edit
                        </span>
                    </a>

                    <form action="{{ url('/estudiante/'.$estudiante->id)}}" method="POST" class="d-inline">
                        @csrf
                        {{method_field('DELETE')}}
                        <button class="btn btn-light" style="color:red" type="submit" onclick="return confirm('¿Quieres borrar?')" value=""><span class="material-icons">delete_outline</span></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        @endsection
        @stop

        @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
        @stop

        @section('js')
        <script>
            console.log('Hi!');
        </script>
        @stop




</html>