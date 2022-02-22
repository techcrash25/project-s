@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Informe de Cursos') }}</div>

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
                <th>Nombre(s)</th>
                <th>Apellido(s)</th>
                <th>Telefono</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->id}}</td>
                <td>{{ $student->document}}</td>
                <td>{{ $student->name}}</td>
                <td>{{ $student->lastname}}</td>
                <td>{{ $student->telephone}}</td>
                <td>
                    @if ($student->state == '1')
                        Alentado 
                    @else
                         Contagiado
                    @endif
                </td>
                <td>
                    Test
                </td>
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