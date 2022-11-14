@extends('layouts.app')

@section('content')

<div class="position-absolute top-50 start-50 translate-middle">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <div class="card">
                <img src="{{ asset('/ImagePictur/Crud.jpg') }}" class="card-img-top" alt="CRUD usuarios">
                    <div class="card-body">
                        <h5 class="card-title">Gestionar Usuarios</h5>
                        <p class="card-text">Crea, visualiza, actualiza y borra los diferentes usuarios del aplicativo</p>
                        <a href="{{ route('FotoNueva') }}" class="btn btn-primary">Gestionar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection