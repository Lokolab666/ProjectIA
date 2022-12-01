@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro Nuevo Tutor') }}</div>

                <div class="card-body">
                    <form method="POST" action="registerTutor">
                        @csrf

                        <div class="row mb-3">
                            <label for="patient_id" class="col-md-4 col-form-label text-md-end">{{ __('Identificación Niño') }}</label>

                            <div class="col-md-6">
                                <input id="patient_id" type="number" class="form-control @error('patient_id') is-invalid @enderror" name="patient_id" value="{{ old('patient_id') }}" required autocomplete="patient_id">

                                @error('patient_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="person_id" class="col-md-4 col-form-label text-md-end">{{ __('Identificación Tutor') }}</label>

                            <div class="col-md-6">
                                <input id="person_id" type="number" class="form-control @error('person_id') is-invalid @enderror" name="person_id" value="{{ old('person_id') }}" required autocomplete="person_id">

                                @error('person_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Finalizar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <p>
                    <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="{{ route('PasoUno') }}">1</a></li>
                        <li class="page-item disabled">
                        <a class="page-link" href="{{ route('PasoDos') }}">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="{{ route('PasoTres') }}">3</a></li>
                    </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection