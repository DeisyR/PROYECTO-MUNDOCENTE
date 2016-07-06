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
                        <li class="active"><a href="home">Inicio</a></li>
                        <li><a href="posts">Publicaciones</a></li>
                        <li><a href="contacsExt">Contactenos</a></li>
                        </li>
                    </ul>
                </div>

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

    <!--Footer-->
    <script src="http://maps.google.com/maps/api/js?sensor=false&callback=iniciar">
    </script>

    <script>
        function iniciar() {
            var mapOptions = {
                center: new google.maps.LatLng(25.80, -80.30),
                zoom: 10,
                mapTypeId: google.maps.MapTypeId.ROADMAP};
            var map = new google.maps.Map(document.getElementById("map"),mapOptions);}
    </script>

    <div id="map"></div>





    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="footer-col col-md-8 google-maps">
                    <h3><a>Localización</a></h3>

                    <!--hr width=150%  align=left-->


                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.101396505633!2d-73.35884268549873!3d5.55198433523435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6a7c3d644e3cd9%3A0x3c1e6f4e767244da!2sUPTC%2C+Universidad+Pedag%C3%B3gica+y+Tecnol%C3%B3gica+de+Colombia!5e0!3m2!1ses-419!2sco!4v1460729797782" width="400" height="180" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="footer-col col-md-4">

                    <h3><a>Mundocente</a></h3>
                    <p>Red de docentes universitarios interesados </p>
                    <p>en compartir información sobre convocatorias </p>
                    <p>docentes, revistas científicas, eventos académicos</p>
                    <p> y mucho más.</p>

                    </br>
                    <a class="btnn btn btn-social-icon btn-twitter" href="http://http://mundocente.co/">
                        <span class="fa fa-twitter" href="https://twitter.com/mundocente"></span>
                    </a>
                    <a href=""></a>
                    <a class="btnn btn btn-social-icon btn-facebook" href="https://www.facebook.com/mundocente/?fref">
                        <span class="fa fa-facebook"></span>
                    </a>

                    <a class="btnn btn btn-social-icon btn-envelope  " href="#">
                        <span class="fa fa-envelope"></span>
                    </a>


                    <a class="btnn btn btn-social-icon btn-linkedin  " href="https://co.linkedin.com/in/pattyavella">
                        <span class="fa fa-linkedin"></span>
                    </a>


                    </ul>

                    <br>
                    <br>
                    <br>


                </div>

            </div>

        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="2">
                        Copyright &copy; Grupo de desarrollo 4<?php echo date("Y"); ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>


@stop
