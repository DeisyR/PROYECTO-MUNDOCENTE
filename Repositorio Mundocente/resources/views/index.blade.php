@extends('layouts.default0')

<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/galeria.css">
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
        <nav class="navbar navbar-inverse navbar-static-top " role="navigation">
            <div class="container">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegation-fm">

                        <span class="sr-only">Desplegar / Ocultar Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a href="../../public/index.html"><span>Mundocente</span></a></h1>




                    <!--Inicio menu-->
                    <div class="collapse navbar-collapse" id="navegation-fm">
                        <ul class="nav navbar-nav">
                            <li ><a href="home">Inicio</a></li>
                            <li><a href="events">Eventos</a></li>
                            <li><a href="calls">Convocatorias</a></li>
                            <li><a href="journals">revistas</a></li>
                            <li><a href="contacs">Contactenos</a></li>
                            </li>

                        </ul>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <form action="" class="navbar-form navbar-right " role="search" style="margin-top:10px;">
                    <input type="button" class="btn " class="btn btn-boton" onclick= "self.location.href = 'login'" value="Iniciar Sección">
                    <input type="button" class="btn" onclick= "self.location.href = 'newuser'" value="Registrarse">
                    <br>
                    <br>
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
        <!--Galery-->
        <div id="demo">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div id="owl-demo" class="owl-carousel">

                            <div class="item"><img src="img/fullimage1.jpg" alt="The Last of us"></div>
                            <div class="item"><img src="img/fullimage2.jpg" alt="GTA V"></div>
                            <div class="item"><img src="img/fullimage3.jpg" alt="Mirror Edge"></div>
                            <div class="item"><img src="img/fullimage4.jpg" alt="The Last of us"></div>
                            <div class="item"><img src="img/fullimage5.jpg" alt="GTA V"></div>
                            <div class="item"><img src="img/fullimage6.jpg" alt="Mirror Edge"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>



    <h1 class="re">RECIENTE</h1>


    <div id="todo">
        <div class="col-md-4">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Eventos</h3>
                </div>
                <div class="panel-body">
                    <!--empieza-->

                    <div class="panel panel-default">
                        <div class="panel-image hide-panel-body">
                            <img src="img/Eventos.jpg" />
                            <label for="toggle-2"></label>
                        </div>
                        <input type="checkbox" id="toggle-2" class="panel-image-toggle">
                        <div class="panel-body">
                            <h4>Title of Image</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper et.</p>
                        </div>
                        <div class="panel-footer text-center">
                            <a href="#download"><span class="glyphicon glyphicon-download"></span></a>
                            <a href="#facebook"><span class="fa fa-facebook"></span></a>
                            <a href="#twitter"><span class="fa fa-twitter"></span></a>
                            <a href="#share"><span class="glyphicon glyphicon-share-alt"></span></a>
                        </div>

                    </div>
                    <!--termina-->
                </div>
            </div>
        </div>

        <!--segundo espacio-->
        <div class="col-md-4">
            <div class="panel panel-danger ">
                <div class="panel-heading">
                    <h3 class="panel-title">Revistas</h3>
                </div>
                <div class="panel-body">
                    <!--empieza-->

                    <div class="panel panel-default">
                        <div class="panel-image hide-panel-body">
                            <img src="img/Revistas.jpg" />
                            <label for="toggle-3"></label>
                        </div>
                        <input type="checkbox" id="toggle-3" class="panel-image-toggle">
                        <div class="panel-body">
                            <h4>Title of Image</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper et.</p>
                        </div>
                        <div class="panel-footer text-center">
                            <a href="#download"><span class="glyphicon glyphicon-download"></span></a>
                            <a href="#facebook"><span class="fa fa-facebook"></span></a>
                            <a href="#twitter"><span class="fa fa-twitter"></span></a>
                            <a href="#share"><span class="glyphicon glyphicon-share-alt"></span></a>
                        </div>

                    </div>
                    <!--termina-->
                </div>
            </div>
        </div>

        <!--tercer espacio-->
        <div class="col-md-4">
            <div class="panel panel-danger ">
                <div class="panel-heading">
                    <h3 class="panel-title">Convocatorias</h3>
                </div>
                <div class="panel-body">
                    <!--empieza-->

                    <div class="panel panel-default">
                        <div class="panel-image hide-panel-body">
                            <img src="img/Convocatorias.jpg" />
                            <label for="toggle-4"></label>
                        </div>
                        <input type="checkbox" id="toggle-4" class="panel-image-toggle">
                        <div class="panel-body">
                            <h4>Title of Image</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper et.</p>
                        </div>
                        <div class="panel-footer text-center">
                            <a href="#download"><span class="glyphicon glyphicon-download"></span></a>
                            <a href="#facebook"><span class="fa fa-facebook"></span></a>
                            <a href="#twitter"><span class="fa fa-twitter"></span></a>
                            <a href="#share"><span class="glyphicon glyphicon-share-alt"></span></a>
                        </div>

                    </div>
                    <!--termina-->
                </div>
            </div>
        </div>

    </div>

    <!--Pagination-->
    <div id="cambiopagina">
        <div class="center-block ">
            <ul class="pagination">
                <li class="disable"><a href="#">&laquo;<span class="sr-only"></span> Anterior</a></li>
                <li class="active"><a href="#">1</a></li>
                <li ><a href="#">2</a>
                <li ><a href="#">3</a>
                <li ><a href="#">4</a>
                <li ><a href="#">5</a>
                <li ><a href="#">6</a>
                <li class="active"><a href="#">&raquo;<span class="sr-only"> Siguiente</span></a></li>
            </ul>

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


    <script>
        $(document).ready(function() {

            var time = 7; // time in seconds

            var $progressBar,
                    $bar,
                    $elem,
                    isPause,
                    tick,
                    percentTime;

            //Init the carousel
            $("#owl-demo").owlCarousel({
                slideSpeed : 500,
                paginationSpeed : 500,
                singleItem : true,
                afterInit : progressBar,
                afterMove : moved,
                startDragging : pauseOnDragging
            });

            //Init progressBar where elem is $("#owl-demo")
            function progressBar(elem){
                $elem = elem;
                //build progress bar elements
                buildProgressBar();
                //start counting
                start();
            }

            //create div#progressBar and div#bar then prepend to $("#owl-demo")
            function buildProgressBar(){
                $progressBar = $("<div>",{
                    id:"progressBar"
                });
                $bar = $("<div>",{
                    id:"bar"
                });
                $progressBar.append($bar).prependTo($elem);
            }

            function start() {
                //reset timer
                percentTime = 0;
                isPause = false;
                //run interval every 0.01 second
                tick = setInterval(interval, 10);
            };

            function interval() {
                if(isPause === false){
                    percentTime += 1 / time;
                    $bar.css({
                        width: percentTime+"%"
                    });
                    //if percentTime is equal or greater than 100
                    if(percentTime >= 100){
                        //slide to next item
                        $elem.trigger('owl.next')
                    }
                }
            }

            //pause while dragging
            function pauseOnDragging(){
                isPause = true;
            }

            //moved callback
            function moved(){
                //clear interval
                clearTimeout(tick);
                //start again
                start();
            }

            //uncomment this to make pause on mouseover
            // $elem.on('mouseover',function(){
            //   isPause = true;
            // })
            // $elem.on('mouseout',function(){
            //   isPause = false;
            // })
        });
    </script>


@stop