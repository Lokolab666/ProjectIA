@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row row-cols-1 row-cols-lg-1 g-1 g-lg-1">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Lista Usuarios</h4>
                    </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Usuario</th>
                                            <th scope="col">Contraseña</th>
                                            <th scope="col">Tipo de Usuario</th>
                                            <th scope="col">Operación</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td class="user_id">{{$user->id}}</td>
                                            <td class="email">{{$user->email}}</td>
                                            <td class="password">{{$user->password}}</td>
                                            <td class="type">{{$user->type}}</td>
                                            <td>
                                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                    <a class="btn btn-warning edit_user" href="{{ route('users.edit',$user->id) }}"><i class="fa fa-pencil"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
