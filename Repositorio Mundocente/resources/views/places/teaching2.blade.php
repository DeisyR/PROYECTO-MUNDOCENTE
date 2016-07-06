@extends('layouts.default')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

@yield('css')



@section('content')

    <header>
        <nav class="navbar navbar-inverse " role="navigation">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-1">
                    <span class="sr-only">Desplegar navegación</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>
                <a href="home" class=" " >
                    <img src="img/LogMundocente.png" srcset="img/LogMundocente.png 768w" width="110">
                </a>
            </div>

            </br>
            </br>

            <!-- Agrupar los enlaces de navegación, los formularios y cualquier
                 otro elemento que se pueda ocultar al minimizar la barra -->
            <div class="collapse navbar-collapse navbar-1">
                <ul class="nav navbar-nav navbar-center">
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                        <li class=""><a href="home">Inicio</a></li>
                        <li class="dropdown">
                            <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button">Categorias <span class="caret"> </span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="calls">Convocatorias</a></li>
                                <li><a href="journals">Revistas</a></li>
                                <li><a href="events">Eventos</a></li>

                            </ul>
                        </li>
                        <li><a href="contacs">Contactenos</a></li>

                        </li>

                    </ul>
                </div>

                <form action="" class="navbar-form navbar-right" role="search">
                    <div>

                    </div>
                    <button type="submit" class="btn " class="btn btn-boton">Iniciar Sección</button>
                    <button type="submit" class="btn ">Registrarse</button>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Buscar">
                    </div>
                    <button type="submit" class="btn ">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>


                </form>
            </div>


        </nav>

    </header>


    <h1>Eventos</h1>

    <input id="tab1" type="radio" name="tabs" checked>
    <label for="tab1">Eventos</label>

    <input id="tab2" type="radio" name="tabs">
    <label for="tab2">Convocatorias</label>

    <input id="tab3" type="radio" name="tabs">
    <label for="tab3">Revistas</label>

    <section id="content1">
        @foreach($listevents as $event)
            <div class="row form-group">
                <div class="col-xs-12 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-image">
                            <img src="img/baner.jpg" class="panel-image-preview" />
                            <label for="toggle-{{$event->id_publication}}"></label>
                        </div>
                        <input type="checkbox" id="toggle-{{$event->id_publication}}" class="panel-image-toggle">
                        <div class="panel-body">
                            <h4>{{$event->name_publication}}</h4>
                            <p>{{$event->description}}</p>
                        </div>
                        <div class="panel-footer text-center">
                            <a href="#download"><span class="glyphicon glyphicon-download"></span></a>
                            <a href="#facebook"><span class="fa fa-facebook"></span></a>
                            <a href="#twitter"><span class="fa fa-twitter"></span></a>
                            <a href="#share"><span class="glyphicon glyphicon-share-alt"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </section>

    <section id="content2">
        @foreach($listevents as $event)
            <div class="row form-group">
                <div class="col-xs-12 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-image">
                            <img src="img/baner.jpg" class="panel-image-preview" />
                            <label for="toggle-{{$event->id_publication}}"></label>
                        </div>
                        <input type="checkbox" id="toggle-{{$event->id_publication}}" class="panel-image-toggle">
                        <div class="panel-body">
                            <h4>{{$event->name_publication}}</h4>
                            <p>{{$event->description}}</p>
                        </div>
                        <div class="panel-footer text-center">
                            <a href="#download"><span class="glyphicon glyphicon-download"></span></a>
                            <a href="#facebook"><span class="fa fa-facebook"></span></a>
                            <a href="#twitter"><span class="fa fa-twitter"></span></a>
                            <a href="#share"><span class="glyphicon glyphicon-share-alt"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>

    <section id="content3">
        @foreach($listevents as $event)
            dato: {{$event->id_publication}}
            <h4>{{$event->name_publication}}</h4>
            <p>{{$event->description}}</p>
        @endforeach
    </section>
    </main>


    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3><a>Location</a></h3>
                        <p>Mundocente emprendimiento APPs<br>Tunja</p>
                        <br>
                        <hr width=100%  align=left>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3><a>Around the Web</a></h3>
                        <ul class="list-inline">
                            <!-- some social networks -->

                            <a class="btn btn-social-icon btn-twitter">
                                <span class="fa fa-twitter"></span>
                            </a>

                            <a class="btn btn-social-icon btn-facebook">
                                <span class="fa fa-facebook"></span>
                            </a>

                            <a class="btn btn-social-icon btn-github">
                                <span class="fa fa-github"></span>
                            </a>

                            <a class="btn btn-social-icon btn-google">
                                <span class="fa fa-fw fa-google-plus"></span>
                            </a>


                        </ul>
                        <br>
                        <br>
                        <hr width=100%  align=left>

                    </div>
                    <div class="footer-col col-md-4">
                        <h3><a>Hacerca de Mundocente</a></h3>
                        <p>Proyecto de emprendimiento que ayuda a maestros a realizar y consultar que eventos,convocatorias y  revistas se encuentran realizandoce o se estan realizando.<a href="http://http://mundocente.co/">Oficial Mundocente</a>.</p>
                        <hr width=100%  align=left>
                    </div>
                </div>
            </div>

        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Grupo de desarrollo EAM
                    </div>
                </div>
            </div>
        </div>
    </footer>
@stop