@extends('app')

@section('content')
<div class="position-absolute top-50 start-50 translate-middle">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <h1 class="display-4">Tomar Fotografía</h1>
                    <img src="{{ asset('/Image/foto.png') }}" alt="Foto" width="150" class="mb-4">
                </div>
            </div>
        </div>
        <p class="font-italic text-primary text-center">Resultado de la imagen.</p>
            <div class="image-area mt-4 bg-primary"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
        <div class="row py-4">
            <div class="col mx-auto">
                <div class="input-group mx-auto rounded-pill bg-primary shadow-sm">
                    <input id="upload" type="file" onchange="readURL(this);" class="form-control border-0 text-primary">
                </div>
            </div>
        </div>
    </div>
</div>


@endsection