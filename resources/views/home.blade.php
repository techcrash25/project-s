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
                <th>Clase</th>
                <th>Código</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
            <tr>
                <td>{{ $course->id}}</td>
                <td>{{ $course->name}}</td>
                <td>{{ $course->code}}</td>
                <td>
                <a class="btn btn-alert" href="{{ url('/course/'.$course->id.'/edit')}}">
                <i class="fa fa-clipboard"></i> Ver Listado
                </a>
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