@extends('app')

@section('content')
<p class="fs-2">Tarjetas de Familia</p>
<div class="mx-auto" style="width: 1000px;">

        <div class="row row-cols-1 row-cols-md-3 g-4">

            <img src="{{ asset('/Image/Toston.png') }}" class="img-thumbnail" alt="Toston">
        
            <img src="{{ asset('/Image/Bigoron.png') }}" class="img-thumbnail" alt="Bigoron">

            <img src="{{ asset('/Image/Nacatamal.png') }}" class="img-thumbnail" alt="Nacatamal">
            <img src="{{ asset('/Image/Quesillo.png') }}" class="img-thumbnail" alt="Quesillo">
            <img src="{{ asset('/Image/Pupuso.png') }}" class="img-thumbnail" alt="Pupuso">
            <img src="{{ asset('/Image/Mazorca.png') }}" class="img-thumbnail" alt="Mazorca">

        </div>

</div>

@endsection