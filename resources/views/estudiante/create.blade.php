@extends('adminlte::page')

@section('title','UTS Docente')

@section('content')
@section('content')
<div class="container">
    <h1>Registrar estudiante</h1>
    <form action="{{ url('/estudiante')}}" method="post" enctype="multipart/form-data">
        @csrf
        @include('estudiante.form',['modo'=>'Guardar Información'])

    </form>
</div>
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