@extends('adminlte::page')

@section('title','UTS Docente')

@section('content')


<div class="container">
    <form>
        <div style="text-align: center ; padding-top: 50px;">
            <h1>Control de COVID-19</h1>
        </div>
        <br><br>
        <div class="form-group">
            <label for="exampleFormControlInput1">Pregunta N° 1</label>
            <div class="col">
                <label for="">¿Siente fiebre, escalofríos como los de una gripe, o una fiebre con una temperatura tomada por la boca de 38,1°C o más?</label>
            </div>
            <div class="col">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="control1" id="si">
                    <label class="form-check-label" for="si">Si</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="control1" id="no">
                    <label class="form-check-label" for="no">No</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Pregunta N° 2</label>
            <div class="col">
                <label for="">¿Ha tenido una pérdida repentina del olfato sin congestión nasal (nariz tapada), con o sin pérdida del gusto?</label>
            </div>
            <div class="col">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="control2" id="si1">
                    <label class="form-check-label" for="si">Si</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="control2" id="no1">
                    <label class="form-check-label" for="no">No</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Pregunta N° 3</label>
            <div class="col">
                <label for="">¿Ha desarrollado una tos o su tos crónica ha empeorado recientemente?</label>
            </div>
            <div class="col">
                <div class="form-check form-check-inline" required>
                    <input class="form-check-input" type="radio" name="control3" id="si2">
                    <label class="form-check-label" for="si">Si</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="control3" id="no2">
                    <label class="form-check-label" for="no">No</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Pregunta N° 4</label>
            <div class="col">
                <label for="">¿Tiene problemas al respirar o le falta el aliento?</label>
            </div>
            <div class="col">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="control4" id="si3">
                    <label class="form-check-label" for="si">Si</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="control4" id="no3">
                    <label class="form-check-label" for="no">No</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Pregunta N° 5</label>
            <div class="col">
                <label for="">¿Tiene dolor de garganta?</label>
            </div>
            <div class="col">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="control5" id="si4">
                    <label class="form-check-label" for="si">Si</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="control5" id="no4">
                    <label class="form-check-label" for="no">No</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Pregunta N° 6</label>
            <div class="col">
                <label for="">¿Ha estado en contacto estrecho (cercano), sin usar elementos de protección, por más de 15 minutos con una persona con diagnóstico confirmado de COVID-19? o ¿ha estado compartiendo el mismo lugar por más de 120 minutos con una persona con diagnóstico confirmado de COVID-19?</label>
            </div>
            <div class="col">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="control6" id="si5">
                    <label class="form-check-label" for="si">Si</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="control6" id="no5">
                    <label class="form-check-label" for="no">No</label>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row" style="align-items: center; justify-content: center;">
            <button class="btn btn-info" onclick="contagio()">Enviar reporte</button>
        </div>
    </form>
</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    function contagio() {
        elemento = document.getElementById('si');
        elemento1 = document.getElementById('si1');
        elemento2 = document.getElementById('si2');
        elemento3 = document.getElementById('si3');
        elemento4 = document.getElementById('si4');
        elemento5 = document.getElementById('si5');

        if (elemento.checked || elemento1.checked || elemento2.checked || elemento3.checked || elemento4.checked || elemento5.checked) {
            alert('Presentas posibles sintomas de COVID19, porfavor ve a clases virtuales y quedate en casa');
        } else {
            alert('Puedes asistir con regularidad');
        }
    }
</script>
@stop