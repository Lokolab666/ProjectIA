@extends('layouts.app')

@section('content')
<p class="fs-2">Tarjetas de alimentos</p>
<div class="mx-auto" style="width: 1000px;">

        <div class="row row-cols-1 row-cols-md-3 g-4">

            <img src="{{ asset('/ImagePictur/Toston.png') }}" class="img-thumbnail" alt="Toston">
        
            <img src="{{ asset('/ImagePictur/Bigoron.png') }}" class="img-thumbnail" alt="Bigoron">

            <img src="{{ asset('/ImagePictur/Nacatamal.png') }}" class="img-thumbnail" alt="Nacatamal">
            <img src="{{ asset('/ImagePictur/Quesillo.png') }}" class="img-thumbnail" alt="Quesillo">
            <img src="{{ asset('/ImagePictur/Pupuso.png') }}" class="img-thumbnail" alt="Pupuso">
            <img src="{{ asset('/ImagePictur/Mazorca.png') }}" class="img-thumbnail" alt="Mazorca">

        </div>

</div>

@endsection