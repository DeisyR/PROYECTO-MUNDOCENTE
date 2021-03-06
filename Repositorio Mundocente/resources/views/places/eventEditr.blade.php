@extends('layouts.defaultup0')

<link rel="stylesheet" href="{{ asset("css/acordeon.css") }}">
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
                            <li><a href="{{ url('/perfilr') }}">Mi Perfil</a></li>
                            <li><a href="{{ url('/teachingr') }}">Mis Publicaciones</a></li>
                            <li><a href="{{ url('/eventsr') }}">Eventos</a></li>
                            <li><a href="{{ url('/callsr') }}">Convocatorias</a></li>
                            <li><a href="{{ url('/journalsr') }}">revistas</a></li>
                            <li><a href="{{ url('/contacsr') }}">Contactenos</a></li>
                            </li>
                        </ul>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <form action="" class="navbar-form navbar-right " role="search" style="margin-top:10px;">
                    <input type="button" class="btn " class="btn btn-boton" onclick= "self.location.href='{{ url('/logout') }}'" value="Cerrar Sesión">
                    <!--input type="button" class="btn" onclick= "self.location.href = 'newuser'" value="Registrarse"-->

                </form>
                <!--form action="" class="navbar-form navbar-right " role="search" style="margin-top:10px;">
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
                </form-->


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
                        <li class="active">eventos</li>
                    </ol>
                </div>
            </section>
        </div>

    </section>


    <!--Formulariooooooooo n_n -->
    @foreach($listevents as $event)
    <form method="post" action="{{url('addEdit')}}" class="form-horizontal">
        {{ csrf_field() }}
        <!--Imagen-->

        <input id="id" type="text" name="id" value="{{ $event->id_publication }}" style="height: 1px; width: 1px;">
        <div class="form-group">
            <label for="title" class="col-md-3 control-label"></label>

            <div class="col-md-6 col-md-offset-2">
                <img class="img-responsive" src="img\logos\Eventos.png" title="Eventos">

            </div>
        </div>

        <!-- Title-->
        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <label for="title" class="col-md-3 control-label"></label>

            <div class="col-md-6">
                <input id="title" type="text" class="form-control" name="title" placeholder="Titulo" value="{{ $event->name_publication }}">

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
                <textarea id="descrip" class="form-control" name="descrip" placeholder="Descripcion" value="" cols="13" rows="7">{{ $event->description }}</textarea>

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
                <input id="link" type="text" class="form-control" name="link" placeholder="Link" value="{{ $event->link_publication }}">

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
                <input id="email" type="text" class="form-control" name="email" placeholder="Correo del representante" value="{{ $event->mail_responsable }}">

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
                <input id="dates" type="text" class="form-control" name="dates" placeholder="Fecha de inicio" value="{{ $event->start_date }}">

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
                <input id="datee" type="text" class="form-control" name="datee" placeholder="Fecha de terminacion" value="{{ $event->final_date }}">

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
                <select class="col-md-12" name="places" >
                    @foreach($listplaces as $place)
                        <option  value="{{$place->id_place}}">{{$place->name_place}}</option>
                    @endforeach
                </select>

                @if ($errors->has('datee'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('places') }}</strong>
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

            </div>

        </div>
    </form>

        <!-- Button col-md-offset-2-->
        <div class="form-group">
            <label for="datee" class="col-md-3 control-label"></label>
            <div class="col-md-6">
                <button id="Createcount" name="guardar" class="btn btn-primary"  onclick= "self.location.href='{{ url('/perfilr') }}'">Cancelar</button>
            </div>
        </div>
    @endforeach
    <br><br><br>




    <!--Footer-->
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
