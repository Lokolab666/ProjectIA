@extends('app')

@section('content')

    <div class="container-fluid">
    <div class="mx-auto" style="width: 1000px;">
            <div class="col">


<!-- Pills navs -->
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-login-tab" data-bs-toggle="pill" data-bs-target="#pills-login" type="button" role="tab" aria-controls="pills-login" aria-selected="true">Login</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-register-tab" data-bs-toggle="pill" data-bs-target="#pills-register" type="button" role="tab" aria-controls="pills-register" aria-selected="false">Registro</button>
    </li>
</ul>
<!-- Pills navs -->

<!-- Pills content -->


<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
        <form>
            <p class="text-center">Iniciar sesión</p>
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="loginName" class="form-control" />
                <label class="form-label" for="loginName">Email or username</label>
            </div>
            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="loginPassword" class="form-control" />
                <label class="form-label" for="loginPassword">Password</label>
            </div>
                <button type="submit" class="btn btn-primary btn-block mb-4">Iniciar Sesión</button>
        </form>
    </div>
    
    <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="pills-register-tab">


    <form action="/people" enctype="multipart/form-data" method="POST">
    @csrf
        <p class="text-center">Nuevo Usuario</p>
    <!-- Name input -->
    <div class="form-outline mb-4">
        <input type="text" id="registerName" name="registerName" class="form-control" />
        <label class="form-label" for="registerName">Nombre</label>
    </div>

    <div class="form-outline mb-4">
        <input type="text" id="registerLastName" name="registerLastName" class="form-control" />
        <label class="form-label" for="registerLastName">Apellido</label>
    </div>

    <div class="form-outline mb-4">
        <input type="number" id="registerAge" name="registerAge" class="form-control" />
        <label class="form-label" for="registerAge">Edad</label>
    </div>

    <!-- Username input -->
    <div class="form-outline mb-4">
        <input type="text" id="registerUsername" name="registerUsername" class="form-control" />
        <label class="form-label" for="registerUsername">Usuario</label>
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
        <input type="password" id="registerPassword" name="registerPassword" class="form-control" />
        <label class="form-label" for="registerPassword">Contraseña</label>
    </div>

    <!-- Repeat Password input -->
    <div class="form-outline mb-4">
        <input type="password" id="registerRepeatPassword" name="registerRepeatPassword" class="form-control" />
        <label class="form-label" for="registerRepeatPassword">Repetir Contraseña</label>
    </div>

    
    <label class="form-label" for="registerRole">Rol</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="registerRole1" id="registerRole1" value="paciente" checked>
        <label class="form-check-label" for="registerRole1Ex">
        Paciente
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="registerRole2" id="registerRole2" value="tutor">
        <label class="form-check-label" for="registerRole2Ex">
        Tutor
        </label>
    </div>


    <!-- Checkbox -->
    <div class="form-check d-flex justify-content-center mb-4">
        <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checkedaria-describedby="registerCheckHelpText" />
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-3">Registrarse</button>
    </form>


    </div>
</div>







</div>
</div>
</div>

@endsection