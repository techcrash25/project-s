@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <b style="font-size:16px;">{{ __('Listado de Cursos') }}</b>
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Clase</th>
                                <th scope="col">Código</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $course)
                            <tr>
                                <th scope="row">{{ $course->id}}</th>
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