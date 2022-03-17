@extends('layouts.app')
@section('content')
@include('sweetalert::alert')
<div class="container" style="font-size:115%">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <div class="card bg-dark text-white">
                        <img class="card-img-top" src="{{URL::asset('/images/students.jpg')}}" alt="students" alt="Card image">
                        <div class="card-img-overlay">
                            <br>
                            <h2 class="text-center">Bienvenido al sistema de control, gestión y prevención contra el COVID-19 en las Unidades Tecnológicas de Santander</h2>
                            <br><br>
                            <h4 class="card-text text-center">Antes de ingresar a clases o si en algún momento presentas posibles sintomas de COVID 19, llena la siguiente encuesta
                                y reporta a la institución para tomar medidas preventivas, el cuidarnos esta en todos nosotros.
                            </h4>
                        </div>
                    </div>
                    <div class="container">
                        <div style="text-align: center ; padding-top: 50px;">
                            <img src="{{URL::asset('/images/uts.png')}}" alt="UTS Logo" width="30%">
                        </div>
                        <br>
                        <form action="{{ url('/student') }}" method="POST">
                            <div class="form-group">
                                <div class="card">
                                    <div class="card-header">
                                        Primera Pregunta:
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <label for="">¿Siente fiebre, escalofríos como los de una gripe, o una fiebre con una temperatura tomada por la boca de 38,1°C o más?</label>
                                            <div class="col">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="control" id="si" required>
                                                    <label class="form-check-label" for="si">Si</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="control" id="no">
                                                    <label class="form-check-label" for="no">No</label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="card">
                                    <div class="card-header">
                                        Segunda Pregunta:
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <label for="">¿Ha tenido una pérdida repentina del olfato sin congestión nasal (nariz tapada), con o sin pérdida del gusto?</label>
                                            <div class="col">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="control2" id="si1" required>
                                                    <label class="form-check-label" for="si">Si</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="control2" id="no1">
                                                    <label class="form-check-label" for="no">No</label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="card">
                                    <div class="card-header">
                                        Tercera Pregunta:
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <label for="">¿Ha desarrollado una tos o su tos crónica ha empeorado recientemente?</label>
                                            <div class="col">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="control3" id="si2" required>
                                                    <label class="form-check-label" for="si">Si</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="control3" id="no2">
                                                    <label class="form-check-label" for="no">No</label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="card">
                                    <div class="card-header">
                                        Cuarta Pregunta:
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <label for="">¿Tiene problemas al respirar o le falta el aliento?</label>
                                            <div class="col">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="control4" id="si3" required>
                                                    <label class="form-check-label" for="si">Si</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="control4" id="no3">
                                                    <label class="form-check-label" for="no">No</label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="card">
                                    <div class="card-header">
                                        Quinta Pregunta:
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <label for="">¿Tiene dolor de garganta?</label>
                                            <div class="col">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="control5" id="si4" required>
                                                    <label class="form-check-label" for="si">Si</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="control5" id="no4">
                                                    <label class="form-check-label" for="no">No</label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="card">
                                    <div class="card-header">
                                        Sexta Pregunta:
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <label for="">¿Ha estado en contacto estrecho (cercano), sin usar elementos de protección, por más de
                                                15 minutos con una persona con diagnóstico confirmado de COVID-19?
                                                o ¿Ha estado compartiendo el mismo lugar por más de 120 minutos con una persona con diagnóstico confirmado de COVID-19?</label>
                                            <div class="col">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="control6" id="si5" required>
                                                    <label class="form-check-label" for="si">Si</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="control6" id="no5">
                                                    <label class="form-check-label" for="no">No</label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <br>
                            @csrf
                            <div class="form-group">
                                <label for="document">Número de documento</label>
                                <input type="number" class="form-control" id="document" name="document" placeholder="Ej: 1098053201" required maxlength=" 11" min="1" pattern="^[0-9]+">
                                <input type="hidden" name="state" id="state">
                            </div>

                            <br>
                            <button class="btn btn-outline-success" onclick="contagio()" type="submit">
                                <a style="font-size:16px">Enviar reporte</a>
                            </button>
                            <br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function contagio() {
            elemento = document.getElementById('si');
            elemento1 = document.getElementById('si1');
            elemento2 = document.getElementById('si2');
            elemento3 = document.getElementById('si3');
            elemento4 = document.getElementById('si4');
            elemento5 = document.getElementById('si5');

            documento = document.getElementById('document');
            state = document.getElementById('state');

            if (elemento.checked || elemento1.checked || elemento2.checked || elemento3.checked || elemento4.checked || elemento5.checked) {
                document.getElementById('state').value = '2';
            } else {
                document.getElementById('state').value = '1';
            }
        }
    </script>
    @stop