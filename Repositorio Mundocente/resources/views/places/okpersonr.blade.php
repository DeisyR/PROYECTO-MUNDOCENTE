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

        <!--Route::resource('task','PlaceController/'64'/create');-->


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
                        <li><a href="perfilr">Perfil</a></li>
                        <li><a href="teachingr">Mis Publicaciones</a></li>
                        <li><a href="eventsr">Eventos</a></li>
                        <li><a href="callsr">Convocatorias</a></li>
                        <li><a href="journalsr">revistas</a></li>
                        <li><a href="contacsr">Contactenos</a></li>
                        </li>

                    </ul>
            <form action="" class="navbar-form navbar-right " role="search" style="margin-top:10px;">
                <input type="button" class="btn " class="btn btn-boton" onclick= "self.location.href='{{ url('/logout') }}'" value="Cerrar Sección">
                <!--input type="button" class="btn" onclick= "self.location.href = 'newuser'" value="Registrarse"-->

            </form>
                </div>
            </div>



        </div>

    </nav>

</header>
</br></br>
</br></br>
</br></br>

<div class="container">


    <div class="alert alert-success">
        <br>
        <br>
        <br>

        <strong>!</strong> Los registros fueron almacenados satisfactoriamente
        <br>
        <br>
        <br>

    </div>

</div>


</br></br>
</br></br>
</br></br>
</br>

<!--Formulariooooooooo n_n -->


<!--div id="confirmation" class="alert alert-success hidden"-->






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



<script type="text/javascript">
    $(document).ready(function () {
        var validator = $("#registration-form").bootstrapValidator({
            feedbackIcons: {
                valid: "glyphicon glyphicon-ok",
                invalid: "glyphicon glyphicon-remove",
                validating: "glyphicon glyphicon-refresh"
            },
            fields : {

                fname: {
                    validators: {
                        notEmpty: {
                            message: 'El nombre de usuario es requerido'
                        }
                    }
                },
                lname: {
                    validators: {
                        notEmpty: {
                            message: 'El apellido de usuario es requerido'
                        }
                    }
                },

                mailp :{
                    message : "correo electrónico es requerido",
                    validators : {
                        notEmpty : {
                            message : "Proporciona una dirección de correo electrónico"
                        },
                        stringLength: {
                            min : 6,
                            max: 35,
                            message: "dirección de correo electrónico debe tener entre 6 y 35 caracteres de longitud "
                        },
                        emailAddress: {
                            message: "dirección de correo electrónico no es válidadirección de correo electrónico no es válida"
                        }
                    }
                },
                passw : {
                    validators: {
                        notEmpty : {
                            message : "Se requiere una contraseña"
                        },
                        stringLength : {
                            min: 13,
                            message: "La contraseña debe ser de 13 caracteres de longitud"
                        },
                        different : {
                            field : "email",
                            message: "dirección de correo electrónico y la contraseña no pueden igualar"
                        }
                    }
                },
                cpass : {
                    validators: {
                        notEmpty : {
                            message: "Se requiere confirmar campo de contraseña"
                        },
                        identical : {
                            field: "password",
                            message : "Contraseña y la confirmación deben coincidir"
                        }
                    }
                },
                tipoP: {
                    validators: {
                        notEmpty: {
                            message: 'Marca un tipo de persona'
                        }
                    }
                },

                membership : {
                    validators : {
                        greaterThan : {
                            value: 1,
                            message: "Se requiere la afiliación"
                        }
                    }
                }
            }
        });

        validator.on("success.form.bv", function (e) {
            e.preventDefault();
            $("#registration-form").addClass("hidden");
            $("#confirmation").removeClass("hidden");
        });

    });
</script>





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
