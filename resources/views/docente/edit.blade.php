@extends('adminlte::page')

@section('title','UTS Docente')


@section('content')
@section('content')
<div class="container">
    <h1>Modificar datos</h1>
    <br>
    @if (Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get('mensaje')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <form action="{{ url('/docente/'.$docente->id) }}" method="POST">
        @csrf
        {{ method_field('PATCH')}}

        @include('docente.form',['modo'=>'Actualizar datos'])

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