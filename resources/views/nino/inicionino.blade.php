@extends('app')

@section('content')
<div class="position-absolute top-50 start-50 translate-middle">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                <img src="{{ asset('/Image/mono.png') }}" class="card-img-top" alt="Acceder a foto">
                    <div class="card-body">
                        <h5 class="card-title">Tomar Fotografía</h5>
                        <p class="card-text">Accede a tomar una nueva foto</p>
                        <a href="{{ route('get-photo') }}" class="btn btn-primary">Tomar foto</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                <img src="{{ asset('/Image/tarjeta.png') }}" class="card-img-top" alt="Acceder a libreria">
                    <div class="card-body">
                        <h5 class="card-title">Tarjetas</h5>
                        <p class="card-text">Mira las tarjetas que has creado</p>
                        <a href="#" class="btn btn-primary">Ver tarjetas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection