@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro Nuevo Niño') }}</div>

                <div class="card-body">
                    <form method="POST" action="registerPatientOne">
                        @csrf

                        <div class="row mb-3">
                            <label for="idCard" class="col-md-4 col-form-label text-md-end">{{ __('Identificación del niño') }}</label>

                            <div class="col-md-6">
                                <input id="card_Id" type="number" class="form-control @error('card_Id') is-invalid @enderror" name="card_Id" value="{{ old('card_Id') }}" required autocomplete="card_Id">

                                @error('card_Id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="score" class="col-md-4 col-form-label text-md-end">{{ __('Puntuación') }}</label>

                            <div class="col-md-6">
                                <input id="score" type="number" class="form-control @error('score') is-invalid @enderror" name="score" value="{{ old('score') }}" required autocomplete="score">

                                @error('score')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="level" class="col-md-4 col-form-label text-md-end">{{ __('Nivel') }}</label>

                            <div class="col-md-6">
                                <input id="level" type="number" class="form-control @error('level') is-invalid @enderror" name="level" value="{{ old('level') }}" required autocomplete="level">

                                @error('level')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Siguiente') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <p>
                    <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="{{ route('PasoUno') }}">1</a></li>
                        <li class="page-item active">
                        <a class="page-link" href="{{ route('PasoDos') }}">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item disabled"><a class="page-link" href="{{ route('PasoTres') }}">3</a></li>
                    </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection