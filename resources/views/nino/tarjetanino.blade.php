@extends('layouts.app')

@section('content')
<div class="position-absolute top-50 start-50 translate-middle">
    <div class="container-fluid">

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                <img src="{{ asset('/ImagePictur/Gallo.png') }}" class="card-img-top" alt="Gallo pinto">
                    <div class="card-body">
                        <h5 class="card-title">Alimentos</h5>
                        <a href="{{ route('Tarjeta-Alimento') }}" class="btn btn-primary stretched-link">Ver Tarjetas</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="{{ asset('/ImagePictur/Familia.png') }}" class="card-img-top" alt="Familia">
                    <div class="card-body">
                        <h5 class="card-title">Familia</h5>
                        <a href="Tarjeta-Familia" class="btn btn-primary stretched-link">Ver Tarjetas</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="{{ asset('/ImagePictur/Amigos.png') }}" class="card-img-top" alt="Amigos">
                    <div class="card-body">
                        <h5 class="card-title">Amigos</h5>
                        <a href="#" class="btn btn-primary stretched-link">Ver Tarjetas</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="{{ asset('/ImagePictur/Juguetes.png') }}" class="card-img-top" alt="Juguetes">
                    <div class="card-body">
                        <h5 class="card-title">Juguetes</h5>
                        <a href="#" class="btn btn-primary stretched-link">Ver Tarjetas</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="{{ asset('/ImagePictur/Colegio.png') }}" class="card-img-top" alt="Colegio">
                    <div class="card-body">
                        <h5 class="card-title">Colegio</h5>
                        <a href="#" class="btn btn-primary stretched-link">Ver Tarjetas</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="{{ asset('/ImagePictur/Naturaleza.png') }}" class="card-img-top" alt="Naturaleza">
                    <div class="card-body">
                        <h5 class="card-title">Naturaleza</h5>
                        <a href="#" class="btn btn-primary stretched-link">Ver Tarjetas</a>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection