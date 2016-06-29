@extends('layouts.defaultAdmin')
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
<!--Tab-->
<link href="css/controltab.css" rel="stylesheet">
<script src="js/prefixfree.min.js"></script>

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
                    <h1><a href="index.html"><span>Mundocente</span></a></h1>




                    <!--Inicio menu-->
                    <div class="collapse navbar-collapse" id="navegation-fm">
                        <ul class="nav navbar-nav">
                            <li ><a href="home">Inicio</a></li>
                            <li><a href="perfilAdmin">Perfil</a></li>
                            <li><a href="publicationsAdmin">Publicaciones</a></li>
                            <li><a href="newUserAdmin">Usuarios</a></li>
                            <li><a href="teaching">Areas</a></li>
                            <li><a href="teaching">Entidades</a></li>
                            <li><a href="contacs">Contactenos</a></li>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>

        </nav>
    </header>

    <main>
    <!--Formulariooooooooo n_n -->

    <form method="post" action="{{url('addUserAdmin')}}" class="form-horizontal">
        {{csrf_field()}}
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-2 control-label " for="fname"></label>
            <div class="row-fluid">
                <div class="col-md-4">
                    <input type="text" id="fname" class="form-control" name="fname"  placeholder="Nombre" />
                </div>
                <div>
                    <div class="col-md-4 ">
                        <input type="text" id="lname" class="form-control" name="lname" placeholder="Apellido" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Correo-->
        <div class="form-group">
            <label class="col-md-2 control-label" for="mailp"></label>
            <div class="col-md-8">
                <input type="text" class="form-control" id="mailp" name="mailp" placeholder="Correo electrónico" />
            </div>
        </div>

        <!-- Password input-->
        <div class="form-group">
            <label class="col-md-2 control-label" for="passw"></label>
            <div class="col-md-8">
                <input type="password" class="form-control" id="passw" name="passw" placeholder="Cotraseña" "/>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-2 control-label" for="cpass"></label>
            <div class="col-md-8">
                <input type="password" class="form-control" id="cpass" name="cpass" placeholder="Vuelve a escribir la contraseña" />
            </div>
        </div>

        <br>

                <!-- Button -->
        <div class="form-group">
            <div class="col-md-8 col-md-offset-2">
                <button id="Createcount" name="guardar" class="btn btn-primary"  onClick="f();">Gueardar</button>
            </div>
        </div>


    </form>
    </main>

    <br>
    <br>
    <br>
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