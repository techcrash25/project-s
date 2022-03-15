@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="mt-5">
                <b>
                    <h1 class="text-center text-white" style="font-weight: 900;">LISTADO DE ESTUDIANTES</h1>
                </b>
            </div>
            <a type="button" class="btn btn-outline-light" href="{{ route('home') }}" style="font-size:16px">
                <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                Regresar</a>
            <br><br>
            <div class="wrap-table100">
                <div class="table100 ver1 m-b-110">
                    <div class="table100-head">
                        <table>
                            <thead>
                                <tr class="row100 head">
                                    <th class="cell100 column1">#</th>
                                    <th class="cell100 column2">Documento</th>
                                    <th class="cell100 column2">Nombre</th>
                                    <th class="cell100 column2">Apellido</th>
                                    <th class="cell100 column4">Correo</th>
                                    <th class="cell100 column5">Dirección</th>
                                    <th class="cell100 column2">Teléfono</th>
                                    <th class="cell100 column2">Estado</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="table100-body js-pscroll">
                        <table>
                            <tbody>
                                @foreach ($students as $student)
                                <tr class="row100 body">
                                    <td class="cell100 column1">{{ $student->id}}</td>
                                    <td class="cell100 column2">{{ $student->document}}</td>
                                    <td class="cell100 column2">{{ $student->name}}</td>
                                    <td class="cell100 column2">{{ $student->lastname}}</td>
                                    <td class="cell100 column4">
                                        <a href="mailto:{{$student->email}}">
                                            {{ $student->email}}
                                        </a>
                                    </td>
                                    <td class="cell100 column5">{{ $student->address}}</td>
                                    <td class="cell100 column2">
                                        <a href="https://wa.me/57{{ $student->telephone}}" target="_blank" style="text-decoration: none; color:black">
                                            <i style="color:#40DC1D; font-size:20px" class="fa fa-whatsapp" aria-hidden="true"> </i>
                                            {{ $student->telephone}}
                                        </a>
                                    </td>
                                    <td class="cell100 column2">
                                        <b>
                                            @if( $student->state == 2)
                                            <a style="color:red">
                                                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> ¡Con sintomas!
                                            </a>

                                            @else
                                            <a style="color:#40DC1D">
                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i> Sin síntomas
                                            </a>
                                            @endif
                                        </b>
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
</div>
@endsection