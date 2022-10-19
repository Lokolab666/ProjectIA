@extends('app')

@section('content')
<div class="position-absolute top-50 start-50 translate-middle">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <h1 class="display-4">Tomar Fotografía</h1>
                    <img src="{{ asset('/ImagePictur/foto.png') }}" alt="Foto" width="150" class="mb-4">
                </div>
            </div>
        </div>
        <p class="font-italic text-primary text-center">Resultado de la imagen.</p>
            <div class="image-area mt-4 bg-primary"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
        <div class="row py-4">
            <form action="/image" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="form-group">
        
                    <input type="file" name="image[]" class="form-control-image" multiple>
                </div>
                <input type="submit" name="Upload" class="btn btn-primary">
            </form>
                
        </div>
    </div>
</div>


@endsection