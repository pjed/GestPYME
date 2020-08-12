<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('titulo')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet"> 

        <!-- Bootstrap CSS -->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->

        <!-- Course CSS -->
        <link rel="stylesheet" type="text/css" href="{{asset ('css/css_general.css')}}" media="screen" />    
        <link rel="stylesheet" type="text/css" href="{{asset ('css/bootstrap.min.css')}}" media="screen" /> 
        @yield('css')

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->
        <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->

        <!-- Javascript -->
        <script src="{{asset ('js/jquery-3.2.1.slim.min.js')}}"></script>
        <script src="{{asset ('js/popper.min.js')}}"></script>
        <script src="{{asset ('js/bootstrap.min.js')}}"></script>
        <script src="{{asset ('js/jquery-3.3.1.min.js')}}"></script>
        @yield('javascript')
    </head>
    <body>
        <header class="bg-dark container-fluid">  
            <nav class="nav navbar-expand-sm row justify-content-center align-items-center">
                <div class="col-3">
                    <a class="nav-link text-center" href="#">
                        <img class="logotipo" src="{{asset ('images/logo.jpg')}}" alt="logotipo">
                    </a>
                </div>
                <div class="container col-7">
                    <div class="row h-100 justify-content-center align-items-center">
                        <p class="titulo_app">GestPYME</p>
                    </div>
                </div>
                <div class="container col-2">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#registroUsuario">
                        Registrarse
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="registroUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Registro Usuario</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h6 class="modal-title text-center" id="exampleModalLabel">Rellene los campos</h6>
                                    <br>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">DNI: </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="DNI" aria-label="DNI" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Nombre: </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Apellidos: </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellidos" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Dirección: </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Dirección" aria-label="Dirección" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Teléfono: </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Teléfono" aria-label="Teléfono" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-success">Aceptar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#iniciarSesion">
                        Iniciar Sesión
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="iniciarSesion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesión</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Correo Electrónico: </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Correo Electrónico" aria-label="Correo Electrónico" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Contraseña: </span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-success">Aceptar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <nav class="navbar navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Inicio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pedir cita online</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Lista de Precios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ubicación</a>
                    </li>
                </ul>
            </div>
        </nav>
        <main>
            @yield('contenido')
        </main>
        <footer class="footer bg-dark container-fluid fixed-bottom">  
            <nav class="nav">
                <div class="col-1 container">
                    <div class="row h-100 justify-content-center align-items-center">
                        <a class="col nav-link" href="https://wahlspain.es/">
                            <img class="borde_logo" src="{{asset ('images/wahl_logo.png')}}" alt="wahl logo">
                        </a>
                    </div>
                </div>
                <div class="col-1 container">
                    <div class="row h-100 justify-content-center align-items-center">
                        <a class="col nav-link" href="https://www.wella.com/professional/es-ES/home">
                            <img class="borde_logo" src="{{asset ('images/wella_logo.png')}}" alt="wella logo">
                        </a>
                    </div>
                </div>
                <div class="col-1 container">
                    <div class="row h-100 justify-content-center align-items-center">
                        <a class="col nav-link" href="#">
                            <img class="borde_logo" src="{{asset ('images/barber_logo.png')}}" alt="barber logo">
                        </a>
                    </div>
                </div>
                <div class="col-2 container">
                    <div class="row h-100 justify-content-center align-items-center">
                        <h6>Dirección</h6>
                        <p class="text-center">Alameda 5 Puertollano (Ciudad Real)</p>
                    </div>
                </div>
                <div class="col-2 container">
                    <div class="row h-100 justify-content-center align-items-center">
                        <p class="text-center">
                        <ul>
                            <li>Teléfono: 926425878</li>
                            <li>Teléfono: 625526154</li>
                        </ul>
                        </p>
                    </div>
                </div>
                <div class="col-3 container">
                    <div class="row h-100 justify-content-center align-items-center">
                        <p class="text-center">Pedro Javier Espinosa Duque</p>
                        <p class="text-center">2020 - © Todos los Derechos Reservados</p>
                    </div>
                </div>
            </nav>
        </footer>
    </body>
</html>
