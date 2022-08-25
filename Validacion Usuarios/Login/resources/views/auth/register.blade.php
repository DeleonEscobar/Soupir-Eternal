@extends('layouts.app')

@section('title', 'Register')

@section('content')

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