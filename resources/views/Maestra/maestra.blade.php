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
                <div class="container col-6">
                    <div class="row h-100 justify-content-center align-items-center">
                        <p class="titulo_app">GestPYME</p>
                    </div>
                </div>
                <div class="container col-3">

                </div>
            </nav>
        </header>
        <main>
            <div class="col-2">
                <img class="fondo_barber" src="{{asset ('images/fondo_barber.png')}}">
            </div>
            
            <div class="col-10">
                
            </div>
        </main>
        <footer class="footer bg-dark container-fluid fixed-bottom">  
            <nav class="nav">
                <div class="col-1 container">
                    <div class="row h-100 justify-content-center align-items-center">
                        <a class="col nav-link" href="https://europa.eu/european-union/index_es">
                            <img class="borde_logo" src="{{asset ('images/wahl_logo.png')}}" alt="wahl logo">
                        </a>
                    </div>
                </div>
                <div class="col-1 container">
                    <div class="row h-100 justify-content-center align-items-center">
                        <a class="col nav-link" href="http://http://www.educa.jccm.es/es/fpclm/fp-dual">
                            <img class="borde_logo" src="{{asset ('images/wella_logo.png')}}" alt="wella logo">
                        </a>
                    </div>
                </div>
                <div class="col-1 container">
                    <div class="row h-100 justify-content-center align-items-center">
                        <a class="col nav-link" href="http://www.cifpvirgendegracia.com/">
                            <img class="borde_logo" src="{{asset ('images/barber_logo.png')}}" alt="barber logo">
                        </a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row h-100 justify-content-center align-items-center">
                        <p class="text-center">Pedro Javier Espinosa Duque</p>
                    </div>
                </div>
                <div class="col-2 container">
                    <div class="row h-100 justify-content-center align-items-center">
                        <p class="text-center">2020 - © Todos los Derechos Reservados</p>
                    </div>
                </div>
                <div class="col-1">
                    <div class="row h-100 justify-content-center align-items-center">
                        <button type="button" class="btn" id="info"  data-toggle="modal" data-target="#exampleModal">
                        </button>
                    </div>
                    <!-- Modal -->
                    <div class="modal  fade" id="exampleModal" tabindex="-1" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h2 class="text-center">Derechos de los iconos</h2>
                                    <h3 class="text-center">Añadir:</h3><a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
                                    <h3 class="text-center">User:</h3><a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
                                    <h3 class="text-center">Delete: </h3><a href="https://www.flaticon.com/authors/kiranshastry" title="Kiranshastry">Kiranshastry</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
                                    <h3 class="text-center">Confirm:</h3><a href="https://www.flaticon.com/authors/roundicons" title="Roundicons">Roundicons</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
                                    <h3 class="text-center">Search:</h3><a href="https://www.flaticon.com/authors/those-icons" title="Those Icons">Those Icons</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
                                    <h3 class="text-center">Edit:</h3><a href="https://www.flaticon.com/authors/kiranshastry" title="Kiranshastry">Kiranshastry</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
                                    <h3 class="text-center">Logout: </h3><a href="https://www.flaticon.com/authors/those-icons" title="Those Icons">Those Icons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a>
                                    <h3 class="text-center">Ticket:</h3><a href="https://www.flaticon.com/authors/those-icons" title="Those Icons">Those Icons</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
                                    <h3 class="text-center">Informacion</h3><a href="https://www.flaticon.com/authors/those-icons" title="Those Icons">Those Icons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </nav>
        </footer>
    </body>
</html>
