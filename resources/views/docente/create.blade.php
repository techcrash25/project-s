@extends('adminlte::page')

@section('title','UTS Docente')

@section('content')
@section('content')

<div class="container">
    <h1>Registrar Docente</h1>
    <form action="{{ url('/docente')}}" method="post" enctype="multipart/form-data">
        @csrf
        @include('docente.form',['modo'=>'Guardar Información'])

    </form>
</div>
@endsection
@stop
</div>
@section('css')
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop