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
                        <a href="{{ route('GestionarUsuario') }}" class="btn btn-primary">Gestionar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                <img src="{{ asset('/ImagePictur/usuario.jpg') }}" class="card-img-top" alt="Crear persona">
                    <div class="card-body">
                        <h5 class="card-title">Crear Personas</h5>
                        <p class="card-text">Crea una nueva persona para que pueda registrarse en el aplicativo</p>
                        <a href="{{ route('PasoUno') }}" class="btn btn-primary">Crear</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection