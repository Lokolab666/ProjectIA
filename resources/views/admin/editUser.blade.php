@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar') }}</div>

                <div class="card-body">
                    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label class="form-label">User ID</label>
                            <input type="number" class="form-control" id="user_id" name="user_id" value="{{ $user->id }}" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" value="{{ $user->password }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Tipo de usuario</label>
                            <input type="number" class="form-control" id="type" name="type" value="{{ $user->type }}">
                        </div>
                    <div class="submit-section">
                        <button type="submit" class="btn btn-primary ml-3">Actualizar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection