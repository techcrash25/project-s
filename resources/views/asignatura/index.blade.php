<html>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
@extends('adminlte::page')

@section('title','UTS Docente')

@section('content')
@section('content')
<div class="container">
    <h1>Listado de Asignaturas</h1>
    @if (Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get('mensaje')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <br>
    <a class="btn btn-success" href="{{ url ('asignatura/create' )}}">Registrar Asignatura</a>
    <br><br>

    <table style="text-align:center;" class="table table-light">
        <thead class="thead-list">
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Docente asignado</th>
                <th>Estudiante(s)</th>
                <th>Casos COVID</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($asignaturas as $asignatura)
            <tr>
                <td>{{ $asignatura->Codigo}}</td>
                <td>{{ $asignatura->Nombre}}</td>
                <td>{{ $asignatura->docentes->Nombre}} {{ $asignatura->docentes->Apellido}}</td>
                <td>{{ $asignatura->estudiantes->Nombre}} {{ $asignatura->estudiantes->Apellido}}</td>
                <td>0</td>
                <td>
                    <a class="btn btn-light" href="{{ url('/asignatura/'.$asignatura->id.'/edit')}}">
                        <span class="material-icons">
                            edit
                        </span>
                    </a>

                    <form action="{{ url('/asignatura/'.$asignatura->id)}}" method="POST" class="d-inline">
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