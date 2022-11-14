@extends('layouts.app')

@section('content')


<div class="position-absolute top-50 start-50 translate-middle">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                <img src="{{ asset('/ImagePictur/One.jpg') }}" class="card-img-top" alt="Paso 1">
                    <div class="card-body">
                        <h5 class="card-title">Paso 1</h5>
                        <p class="card-text">Crear una nueva persona</p>
                        <a href="{{ route('PasoUno') }}" class="btn btn-primary">Paso 1</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="{{ asset('/ImagePictur/Two.jpg') }}" class="card-img-top" alt="Paso 2">
                    <div class="card-body">
                        <h5 class="card-title">Paso 2</h5>
                        <p class="card-text">Crea un nuevo paciente</p>
                        <a href="{{ route('PasoDos') }}" class="btn btn-primary">Paso 2</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="{{ asset('/ImagePictur/Three.jpg') }}" class="card-img-top" alt="Paso 3">
                    <div class="card-body">
                        <h5 class="card-title">Paso 3</h5>
                        <p class="card-text">Crea un nuevo tutor</p>
                        <a href="{{ route('PasoTres') }}" class="btn btn-primary">Paso 3</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<a href="{{ route('admin.inicioadmin') }}" class="btn btn-primary">Inicio</a>
@endsection