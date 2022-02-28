@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Informe de Cursos') }} </div>
                <a type="button" class="btn btn-link" href="{{ route('home') }}">Regresar</a>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <table class="table table-light">
        <thead class="thead-list">
            <tr>
                <th>#</th>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->id}}</td>
                <td>{{ $student->document}}</td>
                <td>{{ $student->name}}</td>
                <td>{{ $student->lastname}}</td>
                <td>{{ $student->telephone }}</td>
                <td>{{ $student->address }}</td>
                <th>
                    @if( $student->state == 2)
                    Contagiado
                    @else
                    Alentado
                    @endif
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection