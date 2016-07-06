@extends('layouts.default0')

<link rel="stylesheet" href="css/estilos.css" xmlns="http://www.w3.org/1999/html">
<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/galeriaIndex.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<script  src="js/jquery.min.js"></script>
<script  src="js/bootstrap.js"></script>
<link rel="shortcut icon" href="Imagenes/LogMundocente-01.png" />

<!--File Galery-->
<link href="css/custom.css" rel="stylesheet">
<!-- Owl Carousel Assets -->
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/owl.theme.css" rel="stylesheet">
<!--Galery-->
<link href="css/Gale.css" rel="stylesheet">
<script src="js/Gale.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery-1.js"></script>
<script src="js/owl.carousel.js"></script>
<link href="css/prettify.css" rel="stylesheet">

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

            </br></br>


            <!-- Agrupar los enlaces de navegación, los formularios y cualquier
                 otro elemento que se pueda ocultar al minimizar la barra -->
            <div class="collapse navbar-collapse navbar-1">
                <ul class="nav navbar-nav navbar-center">
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                            <li ><a href="home">Inicio</a></li>
                            <li><a href="perfilAdmin">Perfil</a></li>
                            <li><a href="publicationsAdmin">Publicaciones</a></li>
                            <li><a href="newUserAdmin">Usuarios</a></li>
                            <li><a href="">Areas</a></li>
                            <li><a href="">Entidades</a></li>
                            <li><a href="contacs">Contactenos</a></li>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>

        </nav>
    </header>

    </br></br>
    </br></br>
    <main>
        <div class="alert alert-success">
            <br>
            <br>
            <br>

            <strong> Los registros fueron almacenados satisfactoriamente</strong>
            <br>
            <br>
            <br>

        </div>
    </main>

    </br></br>
    </br></br>
    </br>

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
                <div class="footer-col col-md-8">
                    <h3><a>Localización</a></h3>



                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.101396505633!2d-73.35884268549873!3d5.55198433523435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6a7c3d644e3cd9%3A0x3c1e6f4e767244da!2sUPTC%2C+Universidad+Pedag%C3%B3gica+y+Tecnol%C3%B3gica+de+Colombia!5e0!3m2!1ses-419!2sco!4v1460729797782" width="400" height="180" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <hr width=150%  align=left>
                </div>
                <div class="footer-col col-md-4">

                    <h3><a>acerca de Mundocente</a></h3>
                    <p>Red de docentes universitarios interesados </p>
                    <p>en compartir información sobre convocatorias </p>
                    <p>docentes, revistas científicas, eventos académicos</p>
                    <p> y mucho más.</p>

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