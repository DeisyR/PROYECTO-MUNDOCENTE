@extends('layouts.defaultup')

<!-- jQuery and Bootstrap JS -->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/acordeon.css">

@section('content')

        <!--Route::resource('task','PlaceController/'64'/create');-->
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
                        <li><a href="perfil">Perfil</a></li>
                        <li><a href="teaching">Publicaciones</a></li>
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





<!--Formulariooooooooo n_n -->

<form method="post" action="{{url('createuser')}}" class="form-horizontal">

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-2 control-label " for="fname"></label>
        <div class="row-fluid">
            <div class="col-md-2">
                <input type="text" id="fname" class="form-control" name="fname"  placeholder="Nombre" value="{{Auth::user()->name}}"/>
            </div>
            <div>
                <div class="col-md-2 ">
                    <input type="text" id="lname" class="form-control" name="lname" placeholder="Apellido" value="{{Auth::user()->lastname}}"/>
                </div>
            </div>
        </div>
    </div>

    <!-- Correo-->
    <div class="form-group">
        <label class="col-md-2 control-label" for="mailp"></label>
        <div class="col-md-4">
            <input type="text" class="form-control" id="mailp" name="mailp" placeholder="Correo electrónico" value="{{Auth::user()->email}}"/>
        </div>
    </div>

    <!-- Password input-->
    <div class="form-group">
        <label class="col-md-2 control-label" for="passw"></label>
        <div class="col-md-4">
            <input type="password" class="form-control" id="passw" name="passw" placeholder="Cotraseña" value="{{Auth::user()->password}}"/>
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-2 control-label" for="cpass"></label>
        <div class="col-md-4">
            <input type="password" class="form-control" id="cpass" name="cpass" placeholder="Vuelve a escribir la contraseña" value="{{Auth::user()->password}}"/>
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-2 control-label" for="linkp"></label>
        <div class="col-md-4">
            <input id="linkp" name="linkp" type="text" placeholder="Link" class="form-control input-md" >
        </div>
    </div>


    <!-- Text entities-->
    <div class="form-group">
        <label class="col-md-2 control-label" for="Crear Cuenta"></label>



        <div class="col-md-3">
            <ul class="menu">
                <li><a href="#">Areas</a>
                    <ul>
                        @foreach($listareas as $area)
                            <input type="checkbox" name="areas[]" value="{{$area->id_area}}" />{{$area->name_area}} <br />

                        @endforeach
                    </ul>
                </li>

            </ul>
        </div>
    </div>
    <br>
    {{csrf_field()}}
    <!-- Button -->
    <div class="form-group">
        <div class="col-md-6 col-md-offset-2">
            <button id="Createcount" name="guardar" class="btn btn-primary"  onClick="f();">Gueardar</button>
        </div>
    </div>


</form>
<div id="confirmation" class="alert alert-success hidden">
    <span class="glyphicon glyphicon-star"></span> Thank you for registering
</div>




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
    function comboInit(thelist)
    {
        if (thelist.value != 0) {
            document.getElementById('listentib').disabled = true;
            theinput = document.getElementById(listentib);
            var idx = thelist.selectedIndex;
            var content = thelist.options[idx].innerHTML;
            if (theinput.value == "")
                theinput.value = content;
        }else{
            document.getElementById('listentib').disabled = false;
        }
    }

    function combo(thelist, listentib)
    {
        theinput = document.getElementById(listentib);
        var idx = thelist.selectedIndex;
        var content = thelist.options[idx].innerHTML;
        theinput.value = content;
    }
</script>


@stop
