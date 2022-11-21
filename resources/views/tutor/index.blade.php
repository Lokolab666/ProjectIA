@extends('layouts.app')

@section('content')

<div class="container">
    <div class="w-full m-2 p-2">
        <a href="{{ route('album.create') }}" class="btn btn-primary">Crear Nuevo Album</a>
    </div>
    <div class="row row-cols-1 row-cols-lg-1 g-1 g-lg-1">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Lista Album</h4>
                    </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Titulo</th>
                                            <th scope="col">Administrar</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($albums as $album)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $album->id }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a class="title" href="{{ route('album.show', $album->id) }}">
                                                    {{$album->title}}
                                                </a>
                                            </td>
                                            
                                            <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="{{ route('album.edit', $album->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                                <form method="POST" action="{{ route('album.destroy', $album->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                                <div class="m-2 p-2">Pag</div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


