@extends('layouts.default')

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.css">
<title> Mundocente</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="css/galeria.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<script  src="js/jquery.min.js"></script>
<script  src="js/bootstrap.js"></script>

<link href="css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="js/bootstrap.min.js"></script>


@section('content')

    <header>
        <nav class="navbar navbar-inverse navbar-static-top " role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegation-fm">

                        <span class="sr-only">Desplegar / Ocultar Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a href="../public/"><span>Mundocente</span></a></h1>
                </div>
                <br>
                <br>
                <br>
                <br>
                <!--Inicio menu-->
                <div class="collapse navbar-collapse" id="navegation-fm">
                    <ul class="nav navbar-nav">
                        <li class=""><a href="../public/">Inicio</a></li>
                        <li class="dropdown">
                            <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button">Categorias <span class="caret"> </span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="calls">Convocatorias</a></li>
                                <li><a href="journals">Revistas</a></li>
                                <li><a href="events">Eventos</a></li>

                            </ul>
                        </li>
                        <li><a href="contacts">Contactenos</a></li>
                        </li>
                    </ul>
                </div>

                <form action="" class="navbar-form navbar-right" role="search">
                    <div >

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

    <div class="container" style="margin-top:10px;">
        <div class="row form-group">
            <div class="col-xs-30 col-md-12">
                    <div class="jumbotron">
                        <h1>Contactenos</h1>

                    <div class="fcontacto">
                        <form method="POST" name="fcontacto" id="fcontacto" action="./">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Tu nombre:</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>Tu Email:</label>
                                    <input type="text" name="email" id="email" class="form-control">
                                </div>
                            </div>
                            <label>Tu Asunto:</label>
                            <input type="text" name="asunto" id="asunto" class="form-control">
                            <label>Tu mensaje</label>
                            <textarea name="mensaje" id="mensaje" cols="30" rows="10"class="form-control"></textarea>

                            <input type="submit" class="btn">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
