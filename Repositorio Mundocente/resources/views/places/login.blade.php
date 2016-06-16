@extends('layouts.default')

<meta charset="utf-8">

<title> Mundocente</title>

<!-- CSS -->
<link rel="shortcut icon" href="img/LogMundocente-01.png" />
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="css/form-elements.css">
<link rel="stylesheet" href="css/style.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->



@section('content')
        <!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">

            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Mundocente Login </h3>
                            <p>Digita tu correo y contraseña: </p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-lock"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" action="{{url('loginh')}}" method="post" class="login-form">
                            <div class="form-group">
                                <label class="sr-only" for="form-username">Correo electrónico</label>
                                <input type="text" name="username" placeholder="example@example.com" class="form-username form-control" id="username">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-password">Contraseña</label>

                                <input type="password" name="password" placeholder="Contraseña" class="form-password form-control" id="password">
                            </div>
                            <button type="submit" class="btn">Iniciar sesión!</button>
                            <br>
                            <a href="olvidoContraseña.html">¿Olvido su contraseña?</a>
                            <br>
                            <button type="submit" class="btn" onclick= "self.location.href = 'home'">Cancelar!</button>


                        </form>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 social-login">
                    <div class="social-login-buttons">
                        <a class="btn btn-link-2" href="#">
                            <i class="fa fa-facebook"></i> Facebook
                        </a>
                        <a class="btn btn-link-2" href="#">
                            <i class="fa fa-twitter"></i> Twitter
                        </a>
                        <a class="btn btn-link-2" href="#">
                            <i class="fa fa-google-plus"></i> Google Plus
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- Javascript -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/scripts.js"></script>

<!--[if lt IE 10]>
<script src="js/placeholder.js"></script>
<![endif]-->

@stop
