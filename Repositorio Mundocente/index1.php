<html>
<header>
    <title>Mundocente</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="public/css/bootstrap.css">
<title> Mundocente</title>
<link rel="stylesheet" href="public/css/bootstrap.min.css">
<link rel="stylesheet" href="public/css/estilos.css">
<link rel="stylesheet" href="public/css/galeria.css">
<link rel="stylesheet" href="public/css/bootstrap-responsive.css">
<script  src="public/js/jquery.min.js"></script>
<script  src="public/js/bootstrap.js"></script>

<!--File Galery-->
<link href="public/css/custom.css" rel="stylesheet">
<!-- Owl Carousel Assets -->
<link href="public/css/owl.carousel.css" rel="stylesheet">
<link href="public/css/owl.theme.css" rel="stylesheet">
<!--Galery-->
<link href="public/css/Gale.css" rel="stylesheet">
<script src="public/js/Gale.js" type="text/javascript" charset="utf-8"></script>
<script src="public/js/jquery-1.js"></script>
<script src="public/js/owl.carousel.js"></script>
<link href="public/css/prettify.css" rel="stylesheet">

</header>

<body>

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
                    <h1><a href="public/"><span>Mundocente</span></a></h1>

                </div>
                <br>
                <br>
                <br>
                <br>
                <!--Inicio menu-->
                <div class="collapse navbar-collapse" id="navegation-fm">
                    <ul class="nav navbar-nav">
                        <li class="public/"><a href="public/">Inicio</a></li>
                        <li class="dropdown">
                            <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button">Categorias <span class="caret"> </span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="public/calls">Convocatorias</a></li>
                                <li><a href="public/journals">Revistas</a></li>
                                <li><a href="public/events">Eventos</a></li>

                            </ul>
                        </li>
                        <li><a href="public/contacs">Contactenos</a></li>

                        </li>

                    </ul>
                </div>

                <form action="" class="navbar-form navbar-right" role="search">
                    <div >

                    </div>
                    <button type="submit" class="btn " class="btn btn-boton">Iniciar Sesión</button>
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



        <div id="demo">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div id="owl-demo" class="owl-carousel">

                            <div class="item"><img src="public/img/fullimage1.jpg" alt="The Last of us"></div>
                            <div class="item"><img src="public/img/fullimage2.jpg" alt="GTA V"></div>
                            <div class="item"><img src="public/img/fullimage3.jpg" alt="Mirror Edge"></div>
                            <div class="item"><img src="public/img/fullimage4.jpg" alt="The Last of us"></div>
                            <div class="item"><img src="public/img/fullimage5.jpg" alt="GTA V"></div>
                            <div class="item"><img src="public/img/fullimage6.jpg" alt="Mirror Edge"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3><a>Localización</a></h3>
                        <p>Mundocente emprendimiento APPs<br>Tunja</p>
                        <br>
                        <hr width=100%  align=left>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3><a>Web</a></h3>
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
                        <h3><a> acerca de Mundocente</a></h3>
                        <p>Proyecto de emprendimiento que ayuda a maestros a realizar y consultar que eventos,convocatorias y  revistas se encuentran en realizandoce .<a href="http://http://mundocente.co/">Oficial Mundocente</a>.</p>
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

</body>


</html>