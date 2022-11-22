@extends('layouts.app')

@section('content')

<div class="container mx-auto mt-6 p-4">
    <p class="fs-2">{{ $album->title }}</p>

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('album.upload', $album->id) }}" enctype="multipart/form-data">
                    @csrf
                        <p class="fs-4">{{ __('Imagenes del Album') }}</p>
                        <div class="mt-1">
                            <input type="file" id="image" name="image" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <button class="bg-green-500">Upload</button>
                        </div>
                    </form>
                </div>
                <div class="mt-4">
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-2 md:gap-4">
                  
                    @foreach ($photos as $photo)
                        <img 
                        alt='Galeria' 
                        class='object-cover object-center' 
                        src="{{ $photo->getUrl('thumb') }}">
                        <a href="{{ route('album.image.show', [$album->id, $photo->id]) }}">Ver</a>
                        <form method="POST" action="{{ route('album.image.destroy', [$album->id, $photo->id]) }}">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    
                    @endforeach
                    </div>
                </div>
                


            </div>
        </div>
    </div>
</div>


@endsection