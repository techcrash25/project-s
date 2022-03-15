@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="mt-5">
                <b>
                    <h1 class="text-center text-white" style="font-weight: 900;">LISTADO DE CURSOS</h1>
                </b>
            </div>
            <br><br>
            <div class="wrap-table100">
                <div class="table100 ver1 m-b-110">
                    <div class="table100-head">
                        <table>
                            <thead>
                                <tr class="row100 head">
                                    <th class="cell100 column1">#</th>
                                    <th class="cell100 column2">Clase</th>
                                    <th class="cell100 column2">Código</th>
                                    <th class="cell100 column2">Acciones</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="table100-body js-pscroll">
                        <table>
                            <tbody>
                                @foreach ($courses as $course)
                                <tr class="row100 body">
                                    <td class="cell100 column1">{{ $course->id}}</td>
                                    <td class="cell100 column2">{{ $course->name}}</td>
                                    <td class="cell100 column2">{{ $course->code}}</td>
                                    <td class="cell100 column2">

                                        <a style="color:#1A7DBE" class="btn btn-alert" href="{{ url('/course/'.$course->id.'/edit')}}">
                                            <i style="font-size:22px" class="fa fa-address-book-o" aria-hidden="true">&nbsp;</i> Ver Listado
                                        </a>
                                        <a style="color:#18B435" class="btn btn-alert" href="{{ url('/course/export/'.$course->id.'')}}">
                                            &nbsp; <i style="font-size:22px" class="fa fa-download" aria-hidden="true">&nbsp;</i> Reporte
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
</div>
@endsection