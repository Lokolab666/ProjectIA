@extends('layouts.app')

@section('content')

<div class="position-absolute top-50 start-50 translate-middle">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <div class="card">
                <img src="{{ asset('/ImagePictur/mono.png') }}" class="card-img-top" alt="Acceder a foto">
                    <div class="card-body">
                        <h5 class="card-title">Tomar Fotografía</h5>
                        <p class="card-text">Toma nuevas fotografías y organizalas según las etiquetas que puedas seleccionar. Siempre hay una nueva foto que tomar</p>
                        <a href="{{ route('FotoNueva') }}" class="btn btn-primary">Tomar foto</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                <img src="{{ asset('/ImagePictur/tarjeta.png') }}" class="card-img-top" alt="Acceder a libreria">
                    <div class="card-body">
                        <h5 class="card-title">Librería</h5>
                        <p class="card-text">Gestiona, edita y elimina tus fotos tomadas que se encuentran en la librería de tu hijo, para que puedas tener un mayor control</p>
                        <a href="#" class="btn btn-primary">Librería</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                <img src="{{ asset('/ImagePictur/Estadistica.png') }}" class="card-img-top" alt="Acceder a estadistica">
                    <div class="card-body">
                        <h5 class="card-title">Estadísticas</h5>
                        <p class="card-text">Mide el aprendizaje de tu hijo, con el rendimiento que tiene con las palabras, los usos, logrando obtener un reporte detallado</p>
                        <a href="#" class="btn btn-primary">Estadísticas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection