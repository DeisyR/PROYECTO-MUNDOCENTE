@extends('layouts.default')

<link rel="stylesheet" href="css/acordeon.css">
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
                            <li ><a href="home">Inicio</a></li>
                            <li><a href="perfilr">Mi Perfil</a></li>
                            <li><a href="teachingr">Mis Publicaciones</a></li>
                            <li><a href="eventsr">Eventos</a></li>
                            <li><a href="callsr">Convocatorias</a></li>
                            <li><a href="journalsr">revistas</a></li>
                            <li><a href="contacs">Contactenos</a></li>
                            </li>

                        </ul>
                <form action="" class="navbar-form navbar-right " role="search" style="margin-top:10px;">
                    <input type="button" class="btn " class="btn btn-boton" onclick= "self.location.href='{{ url('/logout') }}'" value="Cerrar Sesión">
                    <!--input type="button" class="btn" onclick= "self.location.href = 'newuser'" value="Registrarse"-->

                </form>
            </div>
            </div>



            </div>

        </nav>
    </header>

    <section class="main container">
        <div class="row">
            <section class="post col-md-20">
                <div class="miga-de-pan">
                    <ol class="breadcrumb">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Categoria</a></li>
                        <li class="active">revistas</li>
                    </ol>
                </div>
            </section>
        </div>

    </section>

    <!--Formulariooooooooo n_n -->

    <form method="post" action="{{url('addjournalsr')}}" class="form-horizontal">
        {{ csrf_field() }}

        <!--Imagen-->
        <div class="form-group">
            <label for="title" class="col-md-3 control-label"></label>

            <div class="col-md-6 col-md-offset-2">
                <img class="img-responsive" src="img\logos\Revistas.png" title="Revistas">
            </div>
        </div>

        <!-- Title-->
        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <label for="title" class="col-md-3 control-label"></label>

            <div class="col-md-6">
                <input id="title" type="text" class="form-control" name="title" placeholder="Titulo" value="{{ old('title') }}">

                @if ($errors->has('title'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <!-- Description-->
        <div class="form-group{{ $errors->has('descrip') ? ' has-error' : '' }}">
            <label for="descrip" class="col-md-3 control-label"></label>

            <div class="col-md-6">
                <textarea id="descrip" class="form-control" name="descrip" placeholder="Descripcion" value="{{ old('descrip') }}" cols="13" rows="7"></textarea>

                @if ($errors->has('descrip'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('descrip') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <!-- Link-->
        <div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
            <label for="link" class="col-md-3 control-label"></label>

            <div class="col-md-6">
                <input id="link" type="text" class="form-control" name="link" placeholder="Link" value="{{ old('link') }}">

                @if ($errors->has('link'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('link') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <!-- Email-->
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-3 control-label"></label>

            <div class="col-md-6">
                <input id="email" type="text" class="form-control" name="email" placeholder="Correo del representante" value="{{ old('email') }}">

                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <!-- DateStart-->
        <div class="form-group{{ $errors->has('dates') ? ' has-error' : '' }}">
            <label for="dates" class="col-md-3 control-label"></label>

            <div class="col-md-6">
                <input id="dates" type="text" class="form-control" name="dates" placeholder="Fecha de inicio" value="{{ old('dates') }}">

                @if ($errors->has('dates'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('dates') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <!-- DateEnd-->
        <div class="form-group{{ $errors->has('datee') ? ' has-error' : '' }}">
            <label for="datee" class="col-md-3 control-label"></label>

            <div class="col-md-6">
                <input id="datee" type="text" class="form-control" name="datee" placeholder="Fecha de terminacion" value="{{ old('datee') }}">

                @if ($errors->has('datee'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('datee') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <!-- Places-->
        <div class="form-group{{ $errors->has('places') ? ' has-error' : '' }}">
            <label for="datee" class="col-md-3 control-label"></label>
            <div class="col-md-6">
                <select class="col-md-12" name="places">
                    @foreach($listplaces as $place)
                        <option  value="{{$place->id_place}}">{{$place->name_place}}</option>
                    @endforeach
                </select>

                @if ($errors->has('datee'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('datee') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <!-- Areas-->
        <div class="form-group{{ $errors->has('areas') ? ' has-error' : '' }}">
            <label for="datee" class="col-md-3 control-label"></label>

            <div class="col-md-6">
                <ul class="menu">
                    <li><a href="#">Areas</a>
                        <ul>
                            @foreach($listareas as $area)
                                <input type="checkbox" id="areas" name="areas[]" value="{{$area->id_area}}" />{{$area->name_area}} <br />

                            @endforeach
                        </ul>
                    </li>

                </ul>

                @if ($errors->has('areas'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('areas') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <!-- Button col-md-offset-2-->
        <div class="form-group">
            <label for="datee" class="col-md-3 control-label"></label>

            <div class="col-md-6">
                <button id="Createcount" name="guardar" class="btn btn-primary"  onClick="f();">Gueardar</button>
                <button id="Createcount" name="guardar" class="btn btn-primary"  onclick= "self.location.href = 'perfilr'">Cancelar</button>

            </div>
        </div>
    </form>
    <br><br><br>

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
