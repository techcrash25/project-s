@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <form method="post" action="{{ url('/student')}}" class="form-inline">
                        @csrf
                        <img src=" {{URL::asset('/images/logo-uts.png')}}" alt="UTS Logo" style="padding-left: 11rem; ">
                        <div class="form-group col-md-6 mx-auto">
                            <form class="form-inline">
                                <label class="sr-only" for="document">Ingrese su número de documento para continuar</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">#</div>
                                    </div>
                                    <input type="number" class="form-control" name="document" id="document" placeholder="Ej: 1098000000" min="1" required>
                                </div>
                                <button type="submit" class="btn btn-primary mb-2">Continuar</button>
                            </form>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection