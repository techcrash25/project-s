@extends('adminlte::page')
<html>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
@section('title','UTS Docente')

@section('content')
@section('content')
<div class="container">
    <h1>Listado de Docentes</h1>
    @if (Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get('mensaje')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <br>
    <a class="btn btn-success" href="{{ url ('docente/create' )}}">Registrar docente</a>
    <br><br>

    <table class="table table-light">
        <thead class="thead-list">
            <tr>
                <th>#</th>
                <th>Documento</th>
                <th>Nombre(s)</th>
                <th>Apellido(s)</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($docentes as $docente)
            <tr>
                <td>{{ $docente->id}}</td>
                <td>{{ $docente->Documento}}</td>
                <td>{{ $docente->Nombre}}</td>
                <td>{{ $docente->Apellido}}</td>
                <td>{{ $docente->Correo}}</td>
                <td>
                    <a class="btn btn-light" href="{{ url('/docente/'.$docente->id.'/edit')}}">
                        <span class="material-icons">
                            edit
                        </span>
                    </a>

                    <form action="{{ url('/docente/'.$docente->id)}}" method="POST" class="d-inline">
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