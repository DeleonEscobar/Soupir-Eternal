@extends('layouts.app')

@section('title', 'Login')

@section('content')

    <div>
        <div class="login-container">
            <div class="login-info-container">
                <h1 class="title">Iniciar Sesión</h1>
                <form class="inputs-container" method="POST" action="">
                    @csrf

                    <input class="input" type="email" placeholder="Correo" id="email" name="email">
                    <input class="input" type="password" placeholder="Contraseña" id="password" name="password">

                    @error('message')
                        <p class="alert alert-danger" role="alert">* {{ $message }}</p>
                    @enderror

                    <button class="btn" type="submit" >Enviar</button>
                    <p class="texto-responsive">Sin cuenta? <a href="">Registrate</a> y crea una cuenta para disfrutar de nuestro servicio </p>
                </form>
            </div>
            <div class="image-container">
                <h1 class="title2">Sin cuenta?</h1>
                <img src="img/login.svg" width="55%" alt="login">
                <p><a href="">Registrate</a> y crea una cuenta para disfrutar de nuestro servicio</p>  
            </div>
        </div>
    </div>
    
@endsection