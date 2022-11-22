@extends('layouts.app')

@section('content')

<div class="container mx-auto mt-6 p-4">
    <p class="fs-2">{{ $album->title }}</p>

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                <div class="m-2 p-2">
                    <img src="{{ $image->getUrl() }}">
                </div>
                <div class="m-2 p-2">
                    <ul>
                        <li>Nombre Coleccion: {{ $image->collection_name }}</li>
                        <li>Nombre: {{ $image->name }}</li>
                        <li>Tipo: {{ $image->mime_type }}</li>
                        <li>Tamaño: {{ $image->human_readable_size }}</li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection