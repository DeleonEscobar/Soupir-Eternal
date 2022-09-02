@extends('layouts.app')

@section('title', 'Register')

@section('content')

    <div class="container w-75 mt-5 rounded shadow">
        <div class="row align-items-stretch">
            
            <div class="col bg d-none d-lg-block" id="col-1">
                <h2 class="fw-bold text-center py-5 mb-5">Tienes una cuenta?</h2>
            </div>

            <div class="col bg-primary">
                

                <h2 class="fw-bold text-center py-5">Bienvenido</h2>

                <!--       LOGIN        -->

                <form action="#">
                    <div class="mb-4">
                        <label for="name" class="form-label">Nombre y Apellido</label>
                        <input type="name" class="form-control" name="name">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-4 form-check">
                        <input type="checkbox" name="connected" class="form-check-input" id="">
                        <label for="connected" class="form-check-label">Mantenerme Conectado</label>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                    </div>
                    
                    <div class="my-3">
                        <span>No tienes cuenta? <a href="#">Registrate</a></span><br>
                        <span><a href="#">Recuperar Contraseña</a></span>
                    </div>
                </form>

                <!--       LOGIN        -->


            </div>
        </div>
    </div>


    <div class="login-container">
        <div class="login-info-container">
            <h1 class="title">Registrarse</h1>
            <form class="inputs-container" method="POST" action="">
                @csrf

                <input class="input" type="text" placeholder="Nombre" id="name" name="name">

                @error('name')
                    <p class="alert alert-danger" role="alert">* {{ $message }}</p>
                @enderror

                <input class="input" type="text" placeholder="Correo" id="email" name="email">

                @error('email')
                    <p class="alert alert-danger" role="alert">* {{ $message }}</p>
                @enderror

                <input class="input" type="password" placeholder="Contraseña" id="password" name="password">

                @error('password')
                    <p class="alert alert-danger" role="alert">* {{ $message }}</p>
                @enderror

                <input class="input" type="password" placeholder="Confirmar contraseña" id="password_confirmation" name="password_confirmation">
                <button class="btn">Enviar</button>
                <p class="texto-responsive">Tienes una cuenta? Entonces deberias <a href="">Iniciar Sesión</a></p>
            </form>
        </div>
        <div class="image-container">
            <h1 class="title2">Tienes una cuenta?</h1>
            <img src="img/register.svg" width="55%" alt="login">
            <p>Entonces deberias <a href="">Iniciar Sesión</a></p>  
        </div>
    </div>
    

    
@endsection