<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title') - Soupir Eternel</title>
        <link rel="stylesheet" href="{{ asset('css/RegisterSoupir.css') }}">
        <link rel="shortcut icon" href="{{ asset('./RegisterSoupir.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid m-3">
              <a class="navbar-brand" href="#">Soupir Eternel</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav ms-auto">
                  @if(auth()->check())
                  <li class="nav-item me-4">
                    <p>Bienvenido <b>{{ auth()->user()->name }}</b></p>
                  </li>
                  <li class="nav-item me-4 ">
                    <a class="nav-link" href="{{ route('login.destroy') }}">Cerrar Sesión</a> <!-- border border-1 rounded -->
                  </li> 
                  @else
                    <li class="nav-item me-4">
                      <a class="nav-link rounded" href="{{ route('login.index')}}">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item me-4 ">
                      <a class="nav-link" href="{{ route('register.index')}}">Registrarse</a> <!-- border border-1 rounded -->
                    </li>
                  @endif
                </ul>

              </div>
            </div>
          </nav>


        @yield('content')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>